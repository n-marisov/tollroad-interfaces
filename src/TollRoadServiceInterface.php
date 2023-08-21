<?php

namespace Maris\Interfaces\TollRoad;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;
use Maris\Interfaces\TollRoad\Model\TollRoadTerminalInterface;

/***
 * Интерфейс сервиса для работы с платными дорогами.
 */
interface TollRoadServiceInterface
{
    /***
     * Определяет, проходит ли полилиния через терминал оплаты.
     * @param TollRoadTerminalInterface $terminal
     * @param PolylineInterface|PolylineAggregateInterface $polyline
     * @return bool
     */
    public function intersection( TollRoadTerminalInterface $terminal, PolylineInterface|PolylineAggregateInterface $polyline ):bool;


    /***
     * Вычисляет группу для оплаты проезда
     * используя габариты автомобиля и количество осей.
     * @param float $height
     * @param int $axios
     * @return int
     */
    public static function calculateGroup( float $height, int $axios = 2 ):int;
}