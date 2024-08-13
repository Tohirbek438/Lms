<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class LocalProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $locales = [
            'uz' => 'Uzbek', 'ru' => 'Russian', 'en' => 'English',
        ];
        Config::set('app.locales', $locales);
        Config::set('translatable.locales', $locales);
    }
}
