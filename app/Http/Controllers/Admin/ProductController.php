<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Product\CreateRequest;
use App\Image;
use App\Product;
use App\ProductAttribute;
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
        try {
            DB::beginTransaction();
            $product = Product::create($request->only(['name', 'category_id', 'is_featured', 'description', 'slug']));
            if (!$product) return redirect()->route('cms.product.index')->withErrors('Cannot create new product');
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
            DB::commit();
            return redirect()->route('cms.product.index')->withSuccess('Create new product is successful');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('cms.product.index')->withErrors($e->getMessage());
        }

    }

    public function edit(Product $product)
    {
        $categories = Category::isActive()->get();
        $colors = Color::isActive()->get();
        $sizes = Size::isActive()->get();
        $variants = $product->productAttrs()->with(['color', 'size', 'images'])->get();
        return view('cms.product.edit', compact('categories', 'colors', 'sizes', 'product', 'variants'));
    }
}
