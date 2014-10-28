<?php

namespace Example\Thing\Action\TradeAction;

use Example\Thing\Action\TradeAction;

/**
 * Buy Action
 * http://schema.org/BuyAction
 */
class BuyAction extends TradeAction
{

    /**
     * A sub property of participant. The seller.The participant/person/organization that sold the object.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $vendor;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    private $warrantyPromise;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/BuyAction";

    public function getvendor()
    {
        return $this->vendor;
    }

    public function setvendor($vendor)
    {
        $this->vendor = $vendor;
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
