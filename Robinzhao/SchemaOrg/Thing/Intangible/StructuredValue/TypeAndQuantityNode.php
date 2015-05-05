<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Type And Quantity Node
 * http://schema.org/TypeAndQuantityNode
 */
class TypeAndQuantityNode extends StructuredValue
{

    /**
     * The quantity of the goods included in the offer.
     *
     * @var Float
     */
    public $amountOfThisGood;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction
     */
    public $businessFunction;

    /**
     * The product that this structured value is referring to.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $typeOfGood;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     *
     * @var String
     */
    public $unitCode;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/TypeAndQuantityNode";

    /**
     * @param $amountOfThisGood Float
     */
    public function addAmountOfThisGood($amountOfThisGood)
    {
        $this->amountOfThisGood []= $amountOfThisGood;
        return $this;
    }

    /**
     * @param $businessFunction Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction
     */
    public function addBusinessFunction($businessFunction)
    {
        $this->businessFunction []= $businessFunction;
        return $this;
    }

    /**
     * @param $typeOfGood Robinzhao\SchemaOrg\Thing\Product
     */
    public function addTypeOfGood($typeOfGood)
    {
        $this->typeOfGood []= $typeOfGood;
        return $this;
    }

    /**
     * @param $unitCode String
     */
    public function addUnitCode($unitCode)
    {
        $this->unitCode []= $unitCode;
        return $this;
    }

}
