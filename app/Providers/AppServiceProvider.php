<?php

namespace App\Providers;

use App\Contracts\Repositories\TemperatureHistoryContract;
use App\Contracts\Services\WeatherContract;
use App\Repositories\TemperatureHistoryRepository;
use App\Services\OpenWeatherService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TemperatureHistoryContract::class, TemperatureHistoryRepository::class);
        $this->app->bind(WeatherContract::class, OpenWeatherService::class);
    }
}
