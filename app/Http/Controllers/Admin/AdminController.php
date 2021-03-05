<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Cms\Profile\RepasswordRequest;
use App\Http\Requests\Cms\Profile\UpdateRequest;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $admin = \Auth::user();
        return view('cms.profile.index', compact('admin'));
    }

    public function update(UpdateRequest $request)
    {
        $admin = \Auth::user();
        return $admin->update($request->validated())
        ? redirect()->route('cms.profile.index')->withSuccess('Update admin is successful')
        : redirect()->route('cms.profile.index')->withErrors('Cannot update admin');
    }

    public function repassword(RepasswordRequest $request)
    {
        $admin = \Auth::user();
        return $admin->update(['password' => \Hash::make($request->new_password)])
            ? redirect()->route('cms.profile.index')->withSuccess('Update admin is successful')
            : redirect()->route('cms.profile.index')->withErrors('Cannot update admin');
    }
}
