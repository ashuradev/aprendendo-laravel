<?php

use App\Facades\Random;

Route::get('/', function () {
    return Random::number(0, 1000);
});
