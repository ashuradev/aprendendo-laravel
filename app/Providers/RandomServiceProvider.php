<?php

namespace App\Providers;

use App\Services\Random;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RandomServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public $singletons = [
        Random::class,
    ];

    public function provides()
    {
        return [Random::class];
    }
}
