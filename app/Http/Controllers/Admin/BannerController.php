<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\Banner\UpdateRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::paginate(5);
        return view('cms.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('cms.banner.create');
    }

    public function edit(Banner $banner)
    {
        return view('cms.banner.create', compact('banner'));
    }

    public function update(Banner $banner, UpdateRequest $request)
    {
        return $banner->update($request->validated())
            ? redirect()->route('cms.banner.index')->withSuccess('Update banner is successful')
            : redirect()->route('cms.banner.index')->withErrors('Cannot update banner');
    }
}
