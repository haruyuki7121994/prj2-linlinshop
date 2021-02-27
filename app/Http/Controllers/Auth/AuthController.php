<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return Auth::user()->isAdmin()
                ? redirect()->route('cms.index')
                : redirect()->route('frontend.home');
        } else return redirect()->route('auth.login.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login.index');
    }
}
