<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Promotion\CreateRequest;
use App\Http\Requests\Cms\Category\UpdateRequest;
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
        $products = ProductAttribute::with(['product', 'color', 'size'])->whereNull('promotion_id')->orderBy('id', 'desc')->get();
        return view('cms.promotion.promotion_product', compact('promotion', 'products'));
    }

    public function add(Request $request)
    {
        dd($request->all());
    }
}
