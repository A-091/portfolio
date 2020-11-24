<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request     $request
     * @param Closure     $next
     * @param null|string $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && 'user' === $guard) {
            return redirect(RouteServiceProvider::HOME);
        } elseif (Auth::guard($guard)->check() && 'admin' === $guard) {
            return redirect(RouteServiceProvider::ADMIN_HOME);
        }

        return $next($request);
    }
}
