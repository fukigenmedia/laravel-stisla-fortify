<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyDeveloper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (
            auth()->user()->admin_id != null &&
            auth()->user()->member_id == null
        ) {
            if (auth()->user()->admin->_dev == 1) {
                return $next($request);
            } else {
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
