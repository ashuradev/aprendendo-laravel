<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\Random as RandomService;

class Random extends Facade
{
    protected static function getFacadeAccessor()
    {
        return RandomService::class;
    }
}
