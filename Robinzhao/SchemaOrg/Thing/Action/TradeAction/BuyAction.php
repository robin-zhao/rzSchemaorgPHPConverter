<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TradeAction;

use Robinzhao\SchemaOrg\Thing\Action\TradeAction;

/**
 * Buy Action
 * http://schema.org/BuyAction
 */
class BuyAction extends TradeAction
{

    /**
     * A sub property of participant. The seller.The participant/person/organization that sold the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $vendor;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    protected $warrantyPromise;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/BuyAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param $vendor Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function getWarrantyPromise()
    {
        return $this->warrantyPromise;
    }

    /**
     * @param $warrantyPromise Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function setWarrantyPromise($warrantyPromise)
    {
        $this->warrantyPromise = $warrantyPromise;
        return $this;
    }

}
