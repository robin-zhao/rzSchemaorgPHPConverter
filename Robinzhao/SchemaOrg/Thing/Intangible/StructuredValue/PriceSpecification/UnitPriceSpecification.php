<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

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
    public $billingIncrement;

    /**
     * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
     *
     * @var String
     */
    public $priceType;

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
    public $context = "http://schema.org/UnitPriceSpecification";

    /**
     * @param $billingIncrement Float
     */
    public function addBillingIncrement($billingIncrement)
    {
        $this->billingIncrement []= $billingIncrement;
        return $this;
    }

    /**
     * @param $priceType String
     */
    public function addPriceType($priceType)
    {
        $this->priceType []= $priceType;
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
