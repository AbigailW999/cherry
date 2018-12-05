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
        View::composer('layouts.base', 'App\Providers\ViewComposers\LangComposer');
        View::composer('layouts.base', 'App\Providers\ViewComposers\BreadCrumbsComposer');//BreadCrumbs
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
