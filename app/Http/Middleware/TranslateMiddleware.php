<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;

class TranslateMiddleware
{

    protected $languages;

    public function __construct()
    {
        $this->languages = [
            [
                'iso_code'=>'es',
                'name'=>'español'
            ],
            [
                'iso_code'=>'ca',
                'name'=>'catala'
            ],

        ];
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $languages = $this->languages;
        View::share('languages', $languages);

        $locale = $request->session()->get('language_code', config('app.locale'));

        App::setLocale($locale);
        Lang::setLocale($locale);

        return $next($request);
    }
}
