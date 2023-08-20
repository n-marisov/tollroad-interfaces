<?php

namespace Maris\Interfaces\TollRoad\Determinant;

use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;
use Maris\Interfaces\TollRoad\Model\TollRoadTerminalInterface;

/***
 * Интерфейс сервиса определяющего прохождения
 * полилинии через терминал оплаты.
 */
interface TollRoadIntersectionInterface
{
    /***
     * Определяет, проходит ли полилиния через терминал оплаты.
     * @param TollRoadTerminalInterface $terminal
     * @param PolylineInterface|PolylineAggregateInterface $polyline
     * @return bool
     */
    public function intersection( TollRoadTerminalInterface $terminal, PolylineInterface|PolylineAggregateInterface $polyline ):bool;
}