<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Components\SuperComponent;

class Super extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SuperComponent::class;
    }
}