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

    public function update(Color $color, UpdateRequest $request)
    {
        return $color->update($request->validated())
            ? redirect()->route('cms.color.index')->withSuccess('Update color is successful')
            : redirect()->route('cms.color.index')->withErrors('Cannot update color');
    }

    public function destroy(Color $color)
    {  
        
        if (count($color->productAttrs)>0) return redirect()->route('cms.color.index')->withErrors('Cannot delete color');
      
        return $color->delete($color->id)
            ? redirect()->route('cms.color.index')->withSuccess('Delete color is successful')
            : redirect()->route('cms.color.index')->withErrors('Cannot delete color');
    }

}
