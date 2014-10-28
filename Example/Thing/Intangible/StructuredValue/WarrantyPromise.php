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
    private $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     * @var Example\Thing\Intangible\Enumeration\WarrantyScope
     */
    private $warrantyScope;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/WarrantyPromise";

    public function getdurationOfWarranty()
    {
        return $this->durationOfWarranty;
    }

    public function setdurationOfWarranty($durationOfWarranty)
    {
        $this->durationOfWarranty = $durationOfWarranty;
        return $this;
    }

    public function getwarrantyScope()
    {
        return $this->warrantyScope;
    }

    public function setwarrantyScope($warrantyScope)
    {
        $this->warrantyScope = $warrantyScope;
        return $this;
    }

}
