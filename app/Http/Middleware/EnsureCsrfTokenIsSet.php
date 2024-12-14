<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCsrfTokenIsSet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          if ($request['_token']) {
             $request->session()->put('_token', $request['_token']);
         }
           if($request->header('X-CSRF-TOKEN'))
           {
               $request->session()->put('_token',$request->header('X-CSRF-TOKEN') );
           }


        return $next($request);
    }
}
