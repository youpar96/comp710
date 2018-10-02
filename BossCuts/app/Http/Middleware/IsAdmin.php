<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
        if(Auth::guest())  {
                return redirect('login');
        }
        if(auth()->user()->isAdmin()) {
        return $next($request);
        }
        return redirect('home');
    }
}
