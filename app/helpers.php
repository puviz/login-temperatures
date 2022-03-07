<?php

use Illuminate\Support\Carbon;

if (!function_exists('changeDateFormat')) {

    function changeDateFormat($date)
    {
        return Carbon::parse($date)->format("D, M F Y, H:i:s");
    }

    function convertCelsiusToFahrenheit($celsius)
    {
        return (int) round(($celsius * 9 / 5) + 32);
    }
}
