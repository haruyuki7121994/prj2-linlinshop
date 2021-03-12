<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Promotion\CreateRequest;
use App\Http\Requests\Cms\Category\UpdateRequest;
use App\Product;
use App\ProductAttribute;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::paginate(5);
        return view('cms.promotion.index', compact('promotions'));
    }

    public function create()
    {
        return view('cms.promotion.create');
    }

    public function store(CreateRequest $request)
    {
        return Promotion::create($request->validated())
            ? redirect()->route('cms.promotion.index')->withSuccess('Create new promotion is successful')
            : redirect()->route('cms.promotion.index')->withErrors('Cannot create new promotion');
    }
    public function edit(Promotion $promotion)
    {
        return view('cms.promotion.edit', compact('promotion'));
    }

    public function update(Promotion $promotion, UpdateRequest $request)
    {
        return $promotion->update($request->validated())
            ? redirect()->route('cms.promotion.index')->withSuccess('Update promotion is successful')
            : redirect()->route('cms.promotion.index')->withErrors('Cannot update promotion');
    }
    public function destroy(Promotion $promotion)
    {

        return $promotion->delete()
            ? redirect()->route('cms.promotion.index')->withSuccess('Delete promotion is successful')
            : redirect()->route('cms.promotion.index')->withErrors('Cannot delete promotion');
    }

    public function show(Promotion $promotion)
    {
        $notPromotionProducts = ProductAttribute::with(['product', 'color', 'size'])->whereNull('promotion_id')->orderBy('id', 'desc')->get()->unique('product_id');
        $promotionProducts = $promotion->productAttr()->with('product')->get()->unique('product_id');
        return view('cms.promotion.promotion_product', compact('promotion', 'notPromotionProducts', 'promotionProducts'));
    }

    public function add(Promotion $promotion, Request $request)
    {
        $productAttrs = ProductAttribute::where('product_id', $request->product_id)->get();
        foreach ($productAttrs as $productAttr) {
            $productAttr->update(['promotion_id' => $promotion->id]);
        }
        return redirect()->back();
    }

    public function remove(Product $product, Request $request)
    {
        $attrs = $product->productAttrs;
        foreach ($attrs as $attr) {
            $attr->update(['promotion_id' => null]);
        }
        return redirect()->back()->withSuccess('Delete promotion product successful!');
    }
}
