<?php

namespace App\Services\Geolocation;

use Illuminate\Support\Facades\Facade;

class GeolocationFacade extends Facade
{
    // Aout Facade
    // Facades allow us to call service instance method statically,
    // providing us a conveniet way to call Service method

    //to overite facade method
    protected static function getFacadeAccessor()
    {

        return Geolocation::class;   
        
    }
}
