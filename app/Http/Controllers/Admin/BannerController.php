<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index()
    {
        return view('cms.banner.index');
    }

    public function create()
    {
        return view('cms.banner.create');
    }
}
