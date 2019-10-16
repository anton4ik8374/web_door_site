<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DateServices extends Facade {

    protected static function getFacadeAccessor(){
        return 'dateCheck';
    }
}