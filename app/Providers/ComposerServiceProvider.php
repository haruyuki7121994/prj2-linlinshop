<?php

namespace App\Providers;

use App\Http\ViewComposers\CartComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        view()->composer(
            ['frontend.*'],
            CartComposer::class
        );
    }
}
