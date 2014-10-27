<?php

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
     * @var QuantitativeValue
     */
    private $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     * @var WarrantyScope
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
