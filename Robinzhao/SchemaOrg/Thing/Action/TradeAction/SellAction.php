<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $buyer;

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
    protected $context = "http://schema.org/SellAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param $buyer Robinzhao\SchemaOrg\Thing\Person
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
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
