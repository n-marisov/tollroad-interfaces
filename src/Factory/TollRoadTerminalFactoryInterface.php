<?php

namespace Maris\Interfaces\TollRoad\Factory;

use Maris\Interfaces\TollRoad\Model\TollRoadTerminalInterface;

/***
 * Фабрика для создания объектов терминалов платных дорог.
 */
interface TollRoadTerminalFactoryInterface
{
    /***
     * Создает терминал платной дороги из массива с данными.
     * @param array $data
     * @return TollRoadTerminalInterface|null
     */
    public function fromArray( array $data ): ?TollRoadTerminalInterface;
}