<?php

namespace App;

use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;

class Playground
{

    public function __construct()
    {
        // $golocation = app(Geolocation::class);
        $result = GeolocationFacade::search("hello");
        dump($result);
    }
}
