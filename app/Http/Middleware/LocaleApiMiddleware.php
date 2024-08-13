<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LocaleApiMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $langHeader = $request->header('Accept-Language');

        $lang = $langHeader ? explode(',', $langHeader)[0] : 'uz';

        $supportedLanguages = config('app.locales', ['en', 'ru', 'uz']); // Default to 'en' if not set

        $langCode = explode('-', $lang)[0];

        if (in_array($langCode, $supportedLanguages)) {
            App::setLocale($langCode);
        } else {

            App::setLocale('uz');
        }

        return $next($request);
    }
}
