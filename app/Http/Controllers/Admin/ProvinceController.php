<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Province\CreateRequest;
use App\Http\Requests\Cms\Province\UpdateRequest;
use App\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::orderBy('id', 'desc')->paginate(5);
        return view('cms.province.index', compact('provinces'));
    }

    public function create()
    {
        return view('cms.province.create');
    }

    public function store(CreateRequest $request)
    {
        return Province::create($request->validated())
        ? redirect()->route('cms.province.index')->withSuccess('Create new province is successful')
        : redirect()->route('cms.province.index')->withErrors('Cannot create new province');
    }
    public function edit(Province $province)
    {
        return view('cms.province.edit', compact('province'));
    }
    public function update(Province $province, UpdateRequest $request)
    {
        return $province->update($request->validated())
            ? redirect()->route('cms.province.index')->withSuccess('Update province is successful')
            : redirect()->route('cms.province.index')->withErrors('Cannot create province');
    }

    public function destroy(Province $province)
    {
        if (count($province->productAttrs)>0) return redirect()->route('cms.province.index')->withErrors('Cannot delete province');
        return $province->delete()
            ? redirect()->route('cms.province.index')->withSuccess('Delete province is successful')
            : redirect()->route('cms.province.index')->withErrors('Cannot delete province');
    }
}
