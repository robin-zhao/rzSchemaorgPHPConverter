<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

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
    private $amountOfThisGood;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @var Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    private $businessFunction;

    /**
     * The product that this structured value is referring to.
     *
     * @var Example\Thing\Product
     */
    private $typeOfGood;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     *
     * @var String
     */
    private $unitCode;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TypeAndQuantityNode";

    /**
     * @return Float
     */
    public function getAmountOfThisGood()
    {
        return $this->amountOfThisGood;
    }

    /**
     * @param $amountOfThisGood Float
     */
    public function setAmountOfThisGood($amountOfThisGood)
    {
        $this->amountOfThisGood = $amountOfThisGood;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * @param $businessFunction Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    public function setBusinessFunction($businessFunction)
    {
        $this->businessFunction = $businessFunction;
        return $this;
    }

    /**
     * @return Example\Thing\Product
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * @param $typeOfGood Example\Thing\Product
     */
    public function setTypeOfGood($typeOfGood)
    {
        $this->typeOfGood = $typeOfGood;
        return $this;
    }

    /**
     * @return String
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @param $unitCode String
     */
    public function setUnitCode($unitCode)
    {
        $this->unitCode = $unitCode;
        return $this;
    }

}
