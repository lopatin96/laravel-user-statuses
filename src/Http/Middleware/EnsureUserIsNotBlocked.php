<?php

namespace Atin\LaravelUserStatuses\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsNotBlocked
{
    public function handle(Request $request, Closure $next): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        if (Auth::user()?->isBlocked()) {
            session()->flush();
            abort(403, 'Your account is blocked');
        }

        return $next($request);
    }
}
