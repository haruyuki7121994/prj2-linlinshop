<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SizeController extends Controller
{
    public function index()
    {
        return view('cms.size.index');
    }

    public function create()
    {
        return view('cms.size.create');
    }
}
