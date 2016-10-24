<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMid
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
        if( ! session::has('is_admin')){
            return redirect('user/signin');
        } else {
            return $next($request);
        }
    }
}
