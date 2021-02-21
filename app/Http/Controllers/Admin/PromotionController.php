<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    public function index()
    {
        return view('cms.promotion.index');
    }

    public function create()
    {
        return view('cms.promotion.create');
    }
}
