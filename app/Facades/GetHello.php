<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GetHello extends Facade {

    protected static function getFacadeAccessor(){
        return 'Hello';
    }
}