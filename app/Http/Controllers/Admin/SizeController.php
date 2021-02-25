<?php

namespace App\Http\Controllers\Admin;

use App\Size;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Size\CreateRequest;
use App\Http\Requests\Cms\Size\UpdateRequest;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::orderBy('id', 'desc')->paginate(5);
        return view('cms.size.index', compact('sizes'));
    }

    public function create()
    {
        return view('cms.size.create');
    }

    public function store(CreateRequest $request)
    {
        
        return Size::create($request->validated())
            ? redirect()->route('cms.size.index')->withSuccess('Create new size is successful')
            : redirect()->route('cms.size.index')->withErrors('Cannot create new size');
    }

    public function edit(Size $size)
    {
        return view('cms.size.edit', compact('size'));
    }

    public function update(Size $size, UpdateRequest $request)
    {
        return $size->update($request->validated())
            ? redirect()->route('cms.size.index')->withSuccess('Update size is successful')
            : redirect()->route('cms.size.index')->withErrors('Cannot update size');
    }

    public function destroy(Size $size)
    {   
        if(count($size->productAttrs)>0) return redirect()->route('cms.categry.index');
        return $size->delete()
            ? redirect()->route('cms.size.index')->withSuccess('Delete size is successful')
            : redirect()->route('cms.size.index')->withErrors('Cannot delete size');
    }
}
