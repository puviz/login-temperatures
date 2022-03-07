<?php

namespace App\Listeners;

use App\Contracts\Repositories\TemperatureHistoryContract;
use App\Contracts\Services\WeatherContract;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginListener
{
    /**
     * The weather implementation.
     *
     * @var WeatherContract
     */
    public $weather;
    /**
     * The temperature history implementation.
     *
     * @var TemperatureHistoryContract
     */
    public $temperatureHistory;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(WeatherContract $weather, TemperatureHistoryContract $temperatureHistory)
    {
        $this->weather = $weather;
        $this->temperatureHistory = $temperatureHistory;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle()
    {
        $response = $this->weather->getCitiesWeather();
        if ($response->ok()) {
            $items = $response->json();
            foreach ($items['list'] as $item) {
                $this->temperatureHistory->createTemperatureHistory([
                    'temperature' => round(Arr::get($item, 'main.temp')),
                    'city' => Arr::get($item, 'name'),
                    'user_id' => Auth::user()->id,
                ]);
            }
        } else {
            Log::error('');
        }
    }
}
