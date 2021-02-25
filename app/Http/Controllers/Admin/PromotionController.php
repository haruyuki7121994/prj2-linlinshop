<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Promotion\CreateRequest;
use App\Promotion;

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
        dd($request->all());
    }
}
