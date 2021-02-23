<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index(Category $category)
    {
        $products = $category->productAttrs()->with('product')->get()->unique('product_id');
        return view('frontend.collection', compact('products', 'category'));
    }

    public function detail(Product $product)
    {
        $productAttrs = $product->productAttrs()
            ->selectRaw('colors.name as color_name, colors.code as color_code, colors.id as color_id, sizes.name as size_name, sizes.id as size_id, product_attributes.*')
            ->leftJoin('colors', 'colors.id', '=', 'product_attributes.color_id')
            ->leftJoin('sizes', 'sizes.id', '=', 'product_attributes.size_id')
            ->get();
        return view('frontend.product', compact('product', 'productAttrs'));
    }
}
