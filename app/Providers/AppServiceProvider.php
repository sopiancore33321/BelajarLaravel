<?php

namespace App\Providers;

use Illuminate\Support\Facades\schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // use Illuminate\Support\facedes\schema;
        // schema : 

        schema::defaultStringLength(191);
    }
}
