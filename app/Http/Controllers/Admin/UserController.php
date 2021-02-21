<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('cms.user.index');
    }

    public function edit(User $user, Request $request)
    {
        return view('cms.user.edit');
    }

    public function update(User $user, Request $request)
    {
    }

    public function destroy(User $user, Request $request)
    {
    }
}
