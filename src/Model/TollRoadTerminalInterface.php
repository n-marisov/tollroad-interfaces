<?php

namespace Maris\Interfaces\TollRoad\Model;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;

/***
 * Интерфейс терминала оплаты платной дороги.
 * @method getLocation() Возвращает локацию терминала оплаты.
 * @method getPolyline() Возвращает участок дороги за который взимается плата.
 */
interface TollRoadTerminalInterface extends LocationAggregateInterface, PolylineAggregateInterface
{
    /***
     * Возвращает название терминала.
     * @return string
     */
    public function getName():string;

    /***
     * Возвращает описание участка дороги.
     * @return string
     */
    public function getDescription():string;

    /***
     * Возвращает название трассы на которой расположен терминал.
     * @return string
     */
    public function getTrackName():string;

    /***
     * Метка (км) трассы на котором начинается участок платной дороги.
     * @return int
     */
    public function getTrackStartMarker():int;

    /***
     * Метка (км) трассы на котором заканчивается участок платной дороги.
     * @return int
     */
    public function getTrackEndMarker():int;

    /***
     * Метка (км) трассы в котором расположен терминал оплаты.
     * @return int
     */
    public function getTrackTerminalMarker():int;

    /**
     * Возвращает начальный азимут в направлении
     * движения от локации терминала.
     * @return float
     */
    public function getBearing():float;

    /***
     * Возвращает ценовое правило по умолчанию.
     *
     * @return mixed
     */
    public function getDefaultPriceBlock():TollRoadPriceBlockInterface;

    /***
     * Возвращает список всех ценовых правил.
     * @return iterable
     */
    public function getPriceBlocks():iterable;

    /***
     * Возвращает ценовое правило в соответствии с предикатом.
     * @param callable( TollRoadPriceBlockInterface $block ):bool $predicate
     * @return TollRoadPriceBlockInterface|null
     */
    public function findPriceBlock( callable $predicate ):?TollRoadPriceBlockInterface;
}