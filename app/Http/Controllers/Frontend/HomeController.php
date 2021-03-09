<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductAttribute;
use App\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = ProductAttribute::with(['product.category', 'images', 'promotion', 'product'])->orderBy('id', 'desc')->get();

        $saleProducts = $products->filter(function ($itm) {
            return $itm->hasPromotion();
        })->unique('product_id')->take(8);

        $featuredProducts = $products->filter(function ($itm) {
            return $itm->product->is_featured == Product::IS_FEATURED;
        })->unique('product_id')->take(4);

        $clothes = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['clothes']));

        $handbags = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['handbags']));

        $shoes = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['shoes']));

        $accessories = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['accessories']));

        return view('frontend.home', compact('featuredProducts', 'clothes', 'handbags', 'shoes', 'accessories', 'saleProducts'));
    }

    public function search(Request $request)
    {
        $categories = \Arr::flatten(\Arr::get(Category::$staticList, $request->category, []));
        $category = $request->key;
        $key = \Str::slug($request->key);
        $products = ProductAttribute::selectRaw('product_attributes.*, categories.id as cate_id')
            ->leftJoin('products', 'products.id', '=', 'product_attributes.product_id')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->when(!empty($request->category), function ($q) use ($categories) {
                $q->whereIn('categories.id', $categories);
            })
            ->where('products.slug', 'Like', "%{$key}%")
            ->get()->unique('product_id');
        return view('frontend.collection', compact('products', 'category'));
    }
}
