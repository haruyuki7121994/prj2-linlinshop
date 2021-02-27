<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Product\EditRequest;
use App\Http\Requests\Frontend\Product\CreateRequest;
use App\Http\Requests\Cms\Product\EditAttributesRequest;
use App\Image;
use App\Product;
use App\ProductAttribute;
use App\Services\ImageService;
use App\Size;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'desc')->paginate(10);
        return view('cms.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::isActive()->get();
        $colors = Color::isActive()->get();
        $sizes = Size::isActive()->get();
        return view('cms.product.create', compact('categories', 'colors', 'sizes'));
    }

    public function store(CreateRequest $request)
    {
        $product = Product::create($request->only(['name', 'category_id', 'is_featured', 'description', 'slug']));
        if (!$product) return redirect()->route('cms.product.index')->withErrors('Cannot create new product');
        $this->handleVariants($request, $product);
        return redirect()->route('cms.product.index')->withSuccess('Create new product is successful');
    }

    public function update(Product $product, EditRequest $request)
    {
        $res = $product->update($request->only(['name', 'category_id', 'is_featured', 'description', 'slug']));
        if (!$res) return redirect()->route('cms.product.index')->withErrors('Cannot edit product');
        $this->handleVariants($request, $product);
        return redirect()->route('cms.product.index')->withSuccess('Create new product is successful');
    }

    public function edit(Product $product)
    {
        $categories = Category::isActive()->get();
        $colors = Color::isActive()->get();
        $sizes = Size::isActive()->get();
        $variants = $product->productAttrs()->with(['color', 'size', 'images'])->get();
        return view('cms.product.edit', compact('categories', 'colors', 'sizes', 'product', 'variants'));
    }

    public function show(ProductAttribute $productAttr)
    {
        $colors = Color::isActive()->get();
        $sizes = Size::isActive()->get();
        return view('cms.product.attributes', compact('productAttr', 'sizes', 'colors'));
    }

    public function updateAttr(ProductAttribute $productAttribute, EditAttributesRequest $request)
    {
        try {
            DB::beginTransaction();
            $productAttribute->update($request->validated());
            if ($request->hasFile('image_url')) {
                $imageService = new ImageService();
                $newUrl = $imageService->upload($request->file('image_url'), 'product');
                $productAttribute->images
                    ? $productAttribute->images->update(['url' => $newUrl])
                    : Image::create(['url' => $newUrl, 'product_attr_id' => $productAttribute->id]);
            }
            DB::commit();
            return redirect()->route('cms.product.edit', $productAttribute->product->id)->withSuccess('Edit product attributes successful!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('cms.product.edit', $productAttribute->product->id)->withErrors($e->getMessage());
        }
    }

    public function destroyAttr(ProductAttribute $productAttribute)
    {
        $productId = $productAttribute->product->id;
        return $productAttribute->delete()
            ? redirect()->route('cms.product.edit', $productId)->withSuccess('Delete product attributes successful!')
            : redirect()->route('cms.product.edit', $productId)->withErrors('Cannot delete product attributes successful!') ;
    }

    private function handleVariants(Request $request, Product $product)
    {

        try {
            DB::beginTransaction();
            if (!empty($request->variants)) {
                $variants = json_decode($request->variants, true);
                if (count($variants) > 0) {
                    foreach ($variants as $variant) {
                        $attr = ProductAttribute::create([
                            'product_id' => $product->id,
                            'color_id' => $variant['color'],
                            'size_id' => $variant['size'],
                            'qty' => $variant['qty'],
                            'price' => $variant['price'],
                        ]);
                        Image::create([
                            'product_attr_id' => $attr->id,
                            'url' => $variant['image_url'],
                        ]);
                    }
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
