<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TradeAction;

use Robinzhao\SchemaOrg\Thing\Action\TradeAction;

/**
 * Sell Action
 * http://schema.org/SellAction
 */
class SellAction extends TradeAction
{

    /**
     * A sub property of participant. The participant/person/organization that bought the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $buyer;

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
    public $context = "http://schema.org/SellAction";

    /**
     * @param $buyer Robinzhao\SchemaOrg\Thing\Person
     */
    public function addBuyer($buyer)
    {
        $this->buyer []= $buyer;
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