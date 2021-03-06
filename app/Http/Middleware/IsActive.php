<?php

namespace App\Http\Middleware;

use Closure;

class IsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (auth()->check() && !auth()->user()->isActive) {
            auth()->logout();
            $message = 'Your account has been suspended. Please contact administrator.';
            return redirect()->route('login')->withMessage($message);
        }

        return $next($request);
    }
}
