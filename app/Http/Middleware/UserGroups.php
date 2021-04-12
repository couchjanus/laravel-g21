<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserGroups
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$groups)
    {
        return collect($groups)->contains(auth()->user()->group) ? $next($request):back();
    }
}
