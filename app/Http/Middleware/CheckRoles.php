<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
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
        // get all the parameters
        // drop 2 first parameters request and closure
        $roles = array_slice(func_get_args(), 2);

        if (auth()->user()->hasRoles($roles)) {
           return $next($request);
        }

        return redirect('/');
    }
}
