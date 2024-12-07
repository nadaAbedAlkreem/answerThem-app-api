<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $lang = $request->route('lang');
          if ($lang) {
             $validLanguages = ['en','ar'];
            if (in_array($lang, $validLanguages)) {
                app()->setLocale($lang);
            } else {
                 app()->setLocale('en');
            }
        }
        return $next($request);
    }
}
