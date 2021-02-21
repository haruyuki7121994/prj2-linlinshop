<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function index()
    {
        return view('cms.color.index');
    }

    public function create()
    {
        return view('cms.color.create');
    }
}
