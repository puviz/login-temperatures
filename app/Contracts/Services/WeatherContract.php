<?php

namespace App\Contracts;

interface WeatherContract
{
    /**
     * Retrieve cities weather info.
     *
     * @param array $cityCodes
     * @return mixed
     */
    public function getCitiesWeather(array $cityCodes);

}
