<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = \Auth::user();
        return view('cms.profile.index', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = \Auth::user();
        dd($request->all());
    }
}
