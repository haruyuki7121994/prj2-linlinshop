<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $admin = \Auth::user();
        return view('cms.profile.index', compact('admin'));
    }
}
