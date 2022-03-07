<?php

namespace App\Repositories;

use App\Contracts\Repositories\TemperatureHistoryContract;
use App\Models\TemperatureHistory;

class TemperatureHistoryRepository implements TemperatureHistoryContract
{
    /**
     * @var TemperatureHistory
     */
    private $temperatureHistory;

    /**
     * TemperatureHistory constructor.
     * @param  $temperatureHistory
     */
    public function __construct(TemperatureHistory $temperatureHistory)
    {
        $this->temperatureHistory = $temperatureHistory;
    }

    /**
     * Create new temperature history instance
     *
     * @param array $values
     * @return mixed
     */
    public function createTemperatureHistory(array $values)
    {
        return $this->temperatureHistory->create($values);
    }

    /**
     * Retrieve all temperature history.
     *
     */
    public function getTemperatureHistory()
    {
        return $this->temperatureHistory->get();
    }
}
