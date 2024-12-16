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

        $locale = $request->segment(count($request->segments()));
          if ($locale) {
             $validLanguages = ['en','ar'];
            if (in_array($locale, $validLanguages)) {
                app()->setLocale($locale);
            } else {
                 app()->setLocale('en');
            }
        }
        return $next($request);
    }
}
