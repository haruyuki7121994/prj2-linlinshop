<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProvinceController extends Controller
{
    public function index()
    {
        return view('cms.province.index');
    }

    public function create()
    {
        return view('cms.province.create');
    }
}
