<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
//        $token = $request->header('Auth_KEY');
//        if(trim($token) != 'ABCD'){
//            return abort(401);
//        }
        return $next($request);
    }
}
