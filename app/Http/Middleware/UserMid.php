<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class UserMid
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
        if( session::has('user_id')){
            return redirect('');
        } else {
            return $next($request);
        }
    }
}
