<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Providers\ViewComposers\SiteComposer;

class SiteProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.base', 'App\Providers\ViewComposers\SiteComposer');//form
        View::composer('layouts.base', 'App\Providers\ViewComposers\CookieComposer');//order count
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
