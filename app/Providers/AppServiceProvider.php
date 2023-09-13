<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use Modules\Branch\Entities\Branch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view)
        {

          //  view()->share();
          //  view()->share();
        });
    }
}