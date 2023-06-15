<?php

namespace Atin\LaravelUserStatuses\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsNotBlocked
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (auth()->user()?->isBlocked()) {
            if (optional(auth()->user()->subscription())->recurring()) {
                auth()->user()->subscription()->cancel();
            }

            session()->flush();
            abort(403, __('laravel-user-statuses::user-statuses.Your account is blocked'));
        }

        return $next($request);
    }
}
