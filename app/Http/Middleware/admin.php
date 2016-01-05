<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class admin
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
        if (!Auth::check() or auth()->user()->admin != 1) {
            return redirect()->route('unauthorized');
        }
        return $next($request);
    }
}
