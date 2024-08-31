<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSuperadmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('superadmin')->check()) {
            return $next($request);
        }

        return redirect('/');
    }
}
