<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Cms\Profile\RepasswordRequest;
use App\Http\Requests\Cms\Profile\UpdateRequest;
use App\Mail\VerifyMail;
use App\Province;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Mail;

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
        } else return back()->withErrors('Invalid User');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login.index');
    }

    public function register()
    {
        $provinces = Province::IsActive()->get();
        return view('frontend.auth.register', compact('provinces'));
    }

    public function verify(RegisterRequest $request)
    {
        $oldPassword = $request->password;
        $password = \Hash::make($request->password);
        $request->merge(['password' => $password, 'remember_token' => \Str::random(8)]);
        $user = User::create($request->all());
        if (!$user) return redirect()->back()->withErrors('Cannot register!');

        Mail::to($user->email)->send(new VerifyMail($user));

        Auth::attempt(['email' => $user->email, 'password' => $oldPassword]);
        return redirect()->route('frontend.home');
    }

    public function confirm(User $user)
    {
        $user->update(['is_active' => User::ACTIVE]);
        return redirect()->route('frontend.home');
    }

    public function profile()
    {
        $provinces = Province::IsActive()->get();
        return view('frontend.auth.profile', compact('provinces'));
    }

    public function update(UpdateRequest $request)
    {
        $user = Auth::user();
        return $user->update($request->all())
            ? redirect()->back()->withSuccess('Update profile successful !')
            : redirect()->back()->withErrors('Cannot update profile');
    }

    public function repassword(RepasswordRequest $request)
    {
        $user = Auth::user();
        return $user->update(['password' => $request->password])
            ? redirect()->back()->withSuccess('Update profile successful !')
            : redirect()->back()->withErrors('Cannot update profile');
    }
}
