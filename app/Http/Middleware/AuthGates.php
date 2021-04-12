<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthGates
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
        $user = Auth::user();
        if($user){
            $roles = Role::with('permissions')->get();
            $permArr = [];
            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions){
                    $permArr[$permissions->title][] = $role->id;
                }
            }
            foreach ($permArr as $title => $roles) {
                Gate::define($title, function($user) use ($roles){
                    return count(array_intersect($user->roles->pluck('id')->toAray(), $roles)) > 0;
                });
            }
        }
        return $next($request);
    }
}
