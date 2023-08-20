<?php

namespace Maris\Interfaces\TollRoad\Calculator;

interface TollRoadGroupCalculatorInterface
{
    /***
     * Вычисляет группу для оплаты проезда
     * используя габариты автомобиля и количество осей.
     * @param float $height
     * @param int $axios
     * @return int
     */
    public function calculateGroup( float $height, int $axios = 2 ):int;
}