<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Province\CreateRequest;
use App\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::IsActive()->paginate(5);
        return view('cms.province.index', compact('provinces'));
    }

    public function create()
    {
        return view('cms.province.create');
    }

    public function store(CreateRequest $request)
    {
        dd($request->validated());
    }
}
