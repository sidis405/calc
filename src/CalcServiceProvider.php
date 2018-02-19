<?php

namespace Acme2\Calc;

use Illuminate\Support\ServiceProvider;

class CalcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Acme2\Calc\CalcController');
        $this->loadViewsFrom(__DIR__.'/views', 'calc');
    }
}
