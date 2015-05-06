<?php
/**
 * This is an auto generated file.
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
    public $vendor;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public $warrantyPromise;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/BuyAction";

    /**
     * @param $vendor Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addVendor($vendor)
    {
        $this->vendor []= $vendor;
        return $this;
    }

    /**
     * @param $warrantyPromise Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function addWarrantyPromise($warrantyPromise)
    {
        $this->warrantyPromise []= $warrantyPromise;
        return $this;
    }


}