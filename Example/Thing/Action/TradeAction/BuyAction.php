<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getVendor()
    {
        return $this->vendor;
    }

    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    public function setWarrantyPromise($warrantyPromise)
    {
        $this->warrantyPromise = $warrantyPromise;
        return $this;
    }

}
