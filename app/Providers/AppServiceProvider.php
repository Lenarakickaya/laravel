<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer(['layouts.base'], 'App\Providers\ViewComposers\OpenGraphComposer');
        View::composer(['layouts.navigation'], 'App\Providers\ViewComposers\UrlComposer');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
