<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     // dd(session('locale', 'cz'));
    //     if (is_host('laravel-topbyt1.loc')) {
    //         app()->setLocale(session('locale', 'cz'));
    //     }
    //     if (is_host('laravel-topbyt2.loc')) {
    //         app()->setLocale(session('locale', 'en'));
    //     }
    //     if (is_host('laravel-topbyt3.loc')) {
    //         app()->setLocale(session('locale', 'sk'));
    //     }

    //     // dd(app()->getLocale());
    //     return $next($request);
    // }

    // public function handle(Request $request, Closure $next)
    // {
    //     // Устанавливаем локаль на основе значения из сессии
    //     // 'default_language' следует заменить на ваш язык по умолчанию
    //     app()->setLocale(session('locale', 'default_language'));

    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['en', 'cz', 'sk'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        }

        return $next($request);
    }
}
