<?php

namespace Example\Thing\Intangible\StructuredValue\PriceSpecification;

use Example\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Unit Price Specification
 * http://schema.org/UnitPriceSpecification
 */
class UnitPriceSpecification extends PriceSpecification
{

    /**
     * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
     *
     * @var Float
     */
    private $billingIncrement;

    /**
     * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
     *
     * @var String
     */
    private $priceType;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     *
     * @var String
     */
    private $unitCode;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/UnitPriceSpecification";

    public function getbillingIncrement()
    {
        return $this->billingIncrement;
    }

    public function setbillingIncrement($billingIncrement)
    {
        $this->billingIncrement = $billingIncrement;
        return $this;
    }

    public function getpriceType()
    {
        return $this->priceType;
    }

    public function setpriceType($priceType)
    {
        $this->priceType = $priceType;
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
