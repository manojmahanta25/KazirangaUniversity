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
        $headers = [
            'Access-Control-Allow-Origin' => "*",
            'Access-Control-Allow-Methods' => "POST,GET,OPTIONS,PUT,DELETE",
            'Access-Control-Allow-Headers' => "Origin, X-Requested-With, Content-Type, Accept, Authorization",
        ];
        if ($request->getMethod() == "OPTIONS"){
            //The client-side application can set only headers allowed in Access-Control-Allow-Headers
            return response()->json('OK',200,$headers);
        }
        return $next($request)
            ->header('Access-Control-Allow-Origin', "*")
            ->header('Access-Control-Allow-Methods', "PUT,POST,DELETE,GET,OPTIONS")
            ->header('Access-Control-Allow-Headers',"Origin, X-Requested-With, Content-Type, Accept, Authorization");
    }
}
