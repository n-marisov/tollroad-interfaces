<?php

namespace Maris\Interfaces\TollRoad\Model;

/***
 * Ценовое правило для проезда через терминал оплаты.
 */
interface TollRoadPriceBlockInterface
{
    /***
     * Цена за проезд для первой группы транспортных средств.
     * @return float
     */
    public function getPriceGroupOne():float;

    /***
     * Цена за проезд для второй группы транспортных средств.
     * @return float
     */
    public function getPriceGroupTwo():float;

    /***
     * Цена за проезд для третей группы транспортных средств.
     * @return float
     */
    public function getPriceGroupThree():float;

    /***
     * Цена за проезд для четвертой группы транспортных средств.
     * @return float
     */
    public function getPriceGroupFour():float;

    /***
     * Возвращает цену за проезд для указанной категории транспортного средства.
     * @param int<1,4> $carGroup
     * @return float
     */
    public function getActualPrice( int $carGroup ):float;


}