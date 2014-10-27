<?php

namespace Example\Thing\Action\TradeAction;

use Example\Thing\Action\TradeAction;

/**
 * Sell Action
 * http://schema.org/SellAction
 */
class SellAction extends TradeAction
{

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     *
     * @var Person
     */
    private $buyer;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var WarrantyPromise
     */
    private $warrantyPromise;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/SellAction";

    public function getbuyer()
    {
        return $this->buyer;
    }

    public function setbuyer($buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }

    public function getwarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    public function setwarrantyPromise($warrantyPromise)
    {
        $this->warrantyPromise = $warrantyPromise;
        return $this;
    }

}
