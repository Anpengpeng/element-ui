<?php

namespace Yxk\Hello;

use Illuminate\Support\ServiceProvider;


class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hello',function ($app){
            return new Hello($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->mergeConfigFrom(__DIR__.'/../../../config/config.php', 'hello');
        $this->publishes([ __DIR__ . '/hellocon.php' => config_path('hello.php')]);
    }
}
