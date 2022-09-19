<?php

namespace App\Providers;

use App\Services\Geolocation\Geolocation;
use App\Services\Map\Map;
use App\Services\Satellite\Satellite;
use Illuminate\Support\ServiceProvider;

//Service Provider are classes that instruct laravel on how to instantiate a Service\Classes
//The register method is where defined our class binding
//The Boot method is call after all service clases are registered
//we need to put our service Procvider in the provider array
  //in the app config  file to active it.OtherWise laravel will
  // authmatically resolve the service on its own using the Automatic Resolution feature

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Geolocation::class,function($app){

            $map = new Map();
            $satellite = new Satellite();

            return new Geolocation($map,$satellite);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
