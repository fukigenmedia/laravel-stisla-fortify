<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyAdmin
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
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
