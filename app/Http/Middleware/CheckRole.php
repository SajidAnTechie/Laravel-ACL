<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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
        if (Auth::guest()) {
            return view('login');
        }

        $actions = $request->route()->getAction();

        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if (auth()->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }

        return response('You have no permmissin to access this page', 401);
    }
}
