<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!\Auth::check()) return redirect()->route('auth.login.index');

        if (\Auth::user()->isAdmin()) return $next($request);

        return redirect()->route('frontend.home');
    }
}
