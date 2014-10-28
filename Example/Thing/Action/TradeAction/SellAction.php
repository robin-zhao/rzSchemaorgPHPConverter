<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Person
     */
    protected $buyer;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    protected $warrantyPromise;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/SellAction";

    /**
     * @return Example\Thing\Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param $buyer Example\Thing\Person
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    /**
     * @param $warrantyPromise Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function setWarrantyPromise($warrantyPromise)
    {
        $this->warrantyPromise = $warrantyPromise;
        return $this;
    }

}
