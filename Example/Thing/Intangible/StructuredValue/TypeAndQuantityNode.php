<?php

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

    public function getamountOfThisGood()
    {
        return $this->amountOfThisGood;
    }

    public function setamountOfThisGood($amountOfThisGood)
    {
        $this->amountOfThisGood = $amountOfThisGood;
        return $this;
    }

    public function getbusinessFunction()
    {
        return $this->businessFunction;
    }

    public function setbusinessFunction($businessFunction)
    {
        $this->businessFunction = $businessFunction;
        return $this;
    }

    public function gettypeOfGood()
    {
        return $this->typeOfGood;
    }

    public function settypeOfGood($typeOfGood)
    {
        $this->typeOfGood = $typeOfGood;
        return $this;
    }

    public function getunitCode()
    {
        return $this->unitCode;
    }

    public function setunitCode($unitCode)
    {
        $this->unitCode = $unitCode;
        return $this;
    }

}
