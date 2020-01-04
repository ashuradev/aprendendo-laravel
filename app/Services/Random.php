<?php

namespace App\Services;

class Random
{
    public function number($min, $max)
    {
        return mt_rand($min, $max);
    }
}
