<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Warranty Promise
 * http://schema.org/WarrantyPromise
 */
class WarrantyPromise extends StructuredValue
{

    /**
     * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     * @var Example\Thing\Intangible\Enumeration\WarrantyScope
     */
    protected $warrantyScope;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/WarrantyPromise";

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getDurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    /**
     * @param $durationOfWarranty Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setDurationOfWarranty($durationOfWarranty)
    {
        $this->durationOfWarranty = $durationOfWarranty;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\WarrantyScope
     */
    public function getWarrantyScope()
    {
        return $this->warrantyScope;
    }

    /**
     * @param $warrantyScope Example\Thing\Intangible\Enumeration\WarrantyScope
     */
    public function setWarrantyScope($warrantyScope)
    {
        $this->warrantyScope = $warrantyScope;
        return $this;
    }

}
