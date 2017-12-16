<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('app_name'       , Config::get('app.conf.app_name'));
        View::share('app_descripcion', Config::get('app.conf.app_descripcion'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
