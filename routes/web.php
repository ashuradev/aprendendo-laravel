<?php

use Facades\App\Services\Random;

Route::get('/', function () {
    return Random::number(0, 1000);
});
