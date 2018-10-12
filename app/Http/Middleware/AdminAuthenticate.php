<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                session()->put('url.intended', redirect()->getUrlGenerator()->full());
                return redirect('/admin/login');
            }
        }

        if ($user = Auth::guard($guard)->user()) {
            if (!$user->isAccessAdmin()) {
                return response('Unauthorized.', 401);
            }
        }

        return $next($request);
    }
}
