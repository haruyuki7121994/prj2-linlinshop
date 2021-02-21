<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('cms.product.index');
    }

    public function create()
    {
        return view('cms.product.create');
    }
}
