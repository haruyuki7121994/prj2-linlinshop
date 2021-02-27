<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', '<>', User::IS_ADMIN)->orderBy('id', 'desc')->paginate(5);
        return view('cms.user.index', compact('users'));
    }

    public function edit(User $user, Request $request)
    {
        return view('cms.user.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
    }

    public function destroy(User $user, Request $request)
    {
    }
}
