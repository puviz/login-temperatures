<?php

namespace App\Contracts\Services;

interface WeatherContract
{
    /**
     * Retrieve cities weather info.
     *
     * @return mixed
     */
    public function getCitiesWeather();

}
