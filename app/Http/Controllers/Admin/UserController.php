<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cms\User\UpdateRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount(['orders'])->where('is_admin', '<>', User::IS_ADMIN)->orderBy('id', 'desc')->paginate(5);
        return view('cms.user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('cms.user.edit', compact('user'));
    }

    public function update(User $user, UpdateRequest $request)
    {
        return $user->update($request->validated())
        ? redirect()->route('cms.user.index')->withSuccess('Update user is successful')
        : redirect()->route('cms.user.index')->withErrors('Cannot create user');
    }

    public function destroy(User $user, Request $request)
    {
        return $user->delete()
        ? redirect()->route('cms.user.index')->withSuccess('Delete user is successful')
        : redirect()->route('cms.user.index')->withErrors('Cannot user province');
    }
}
