<?php

namespace App\Contracts;

interface TemperatureHistoryContract
{
    /**
     * Create new temperature history instance.
     *
     * @param array $values
     * @return mixed
     */
    public function createTemperatureHistory(array $values);

    /**
     * Retrieve all temperature history.
     *
     * @return mixed
     */
    public function getTemperatureHistory();
}
