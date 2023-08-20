<?php

namespace Maris\Interfaces\TollRoad\Calculator;

interface TollRoadGroupCalculatorInterface
{
    /***
     * Вычисляет группу для оплаты проезда
     * используя габариты автомобиля и количество осей.
     * @param float $length
     * @param float $width
     * @param float $height
     * @param int $axios
     * @return int
     */
    public function calculateGroup( float $length, float $width, float $height, int $axios = 2 ):int;
}