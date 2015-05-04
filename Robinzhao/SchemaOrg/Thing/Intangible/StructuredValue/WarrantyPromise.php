<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Warranty Promise
 * http://schema.org/WarrantyPromise
 */
class WarrantyPromise extends StructuredValue
{

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope
     */
    protected $warrantyScope;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/WarrantyPromise";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getDurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    /**
     * @param $durationOfWarranty Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setDurationOfWarranty($durationOfWarranty)
    {
        $this->durationOfWarranty = $durationOfWarranty;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope
     */
    public function getWarrantyScope()
    {
        return $this->warrantyScope;
    }

    /**
     * @param $warrantyScope Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope
     */
    public function setWarrantyScope($warrantyScope)
    {
        $this->warrantyScope = $warrantyScope;
        return $this;
    }

}
