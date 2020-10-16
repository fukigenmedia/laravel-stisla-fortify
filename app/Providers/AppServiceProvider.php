<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
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
        # Locale Settings
        // Carbon::setLocale('id');
        // date_default_timezone_set('Asia/Makassar');

        # Pagination Setting
        Paginator::useBootstrap();
    }
}
