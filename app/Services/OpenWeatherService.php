<?php

namespace App\Services;

use App\Contracts\Services\WeatherContract;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherContract
{
    public function getCitiesWeather()
    {
        $openConfigs = config('services.open_weather');
        return Http::get(
            "https://api.openweathermap.org/data/2.5/group?id={$openConfigs['city_list']}&units=metric&appid={$openConfigs['key']}"
        );
    }
}
