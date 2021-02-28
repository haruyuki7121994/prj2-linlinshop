<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductAttribute;

class HomeController extends Controller
{
    public function index()
    {
        $products = ProductAttribute::with(['product.category', 'images'])->orderBy('id', 'desc')->get();

        $featuredProducts = $products->filter(function ($itm) {
            return $itm->product->is_featured == Product::IS_FEATURED;
        })->unique('product_id')->take(4);

        $clothes = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['clothes']));

        $handbags = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['handbags']));

        $shoes = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['shoes']));

        $accessories = $this->filterProdsByCategories($products, \Arr::flatten(Category::$staticList['accessories']));

        return view('frontend.home', compact('featuredProducts', 'clothes', 'handbags', 'shoes', 'accessories'));
    }
}
