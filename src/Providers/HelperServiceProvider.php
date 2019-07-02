<?php

namespace Msi\Helper\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app['router']->group(['namespace' => 'Msi\Falcon\Http\Controllers'], function () {
        //     require __DIR__.'/../../routes/web.php';
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}
