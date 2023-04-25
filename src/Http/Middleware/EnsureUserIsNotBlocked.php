<?php

namespace Atin\LaravelUserStatuses\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsNotBlocked
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (Auth::user()?->isBlocked()) {
            session()->flush();
            abort(403, __('laravel-user-statuses::user-statuses.Your account is blocked'));
        }

        return $next($request);
    }
}
