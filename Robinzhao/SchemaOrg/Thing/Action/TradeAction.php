<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action;

use Robinzhao\SchemaOrg\Thing\Action;

/**
 * Trade Action
 * http://schema.org/TradeAction
 */
class TradeAction extends Action
{

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
     *
     * @var String|Float
     */
    public $price;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/TradeAction";

    /**
     * @param $price String|Float
     */
    public function addPrice($price)
    {
        $this->price []= $price;
        return $this;
    }


}