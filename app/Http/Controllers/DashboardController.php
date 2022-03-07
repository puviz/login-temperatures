<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\TemperatureHistoryContract;
use App\Http\Resources\TemperatureHistoryResource;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * @var TemperatureHistoryContract
     */
    private $temperatureHistory;

    /**
     * TemperatureHistoryContract constructor.
     * @param  $temperatureHistory
     */
    public function __construct(TemperatureHistoryContract $temperatureHistory)
    {
        $this->temperatureHistory = $temperatureHistory;
    }

    /**
     * Render dashboard component.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard');
    }

    /**
     * Retrieve all temperature history.
     * @param  $temperatureHistory
     */
    public function getAllTemperatureHistory()
    {
        return TemperatureHistoryResource::collection($this->temperatureHistory->getTemperatureHistory())
            ->collection
            ->groupBy('city');
    }

}
