<?php

use App\Services\Random;

Route::get('/', function (Random $random) {
    return $random->number(0, 1000);
});
