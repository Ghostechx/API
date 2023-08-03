<?php

namespace App\Providers;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;
use Illuminate\Support\ServiceProvider;
use App\Services\Geolocation\Geolocation;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(Geolocation::class, function($app){
            $map = new Map();
            $satellite = new Satellite();

             return new Geolocation($map, $satellite);
            // return 'aaaa';
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }


}
 