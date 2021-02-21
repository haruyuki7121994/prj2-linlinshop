<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('cms.order.index');
    }

    public function edit()
    {
        return view('cms.order.detail');
    }
}
