<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Color;
use App\Http\Requests\Cms\color\CreateRequest;
use App\Http\Requests\Cms\color\UpdateRequest;

class ColorController extends Controller
{
    public function index()
    {
        $colors = color::orderBy('id', 'desc')->paginate(5);
        return view('cms.color.index',compact('colors'));
    }

    public function create()
    {
        return view('cms.color.create');
    }

    public function store(CreateRequest $request)
    {
        return Color::create($request->validated())
            ? redirect()->route('cms.color.index')->withSuccess('Create new color is successful')
            : redirect()->route('cms.color.index')->withErrors('Cannot create new color');
    }

    public function edit(Color $color)
    {
        return view('cms.color.edit', compact('color'));
    }

}
