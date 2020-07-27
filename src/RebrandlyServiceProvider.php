<?php

namespace Givebutter\LaravelRebrandly;

use Illuminate\Support\ServiceProvider;

class RebrandlyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/rebrandly.php' => config_path('rebrandly.php'),
        ]);
    }
    
    public function register()
    {
        /*$this->app->bind('rebrandly', function ($app) {
            return new Rebrandly;
        });*/
    }
}
