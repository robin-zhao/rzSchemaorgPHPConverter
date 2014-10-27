<?php

namespace Example\Thing\Action;

use Example\Thing\Action;

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
    private $price;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TradeAction";

    public function getprice()
    {
        return $this->price;
    }

    public function setprice($price)
    {
        $this->price = $price;
        return $this;
    }

}
