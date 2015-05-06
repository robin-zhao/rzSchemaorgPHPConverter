<?php
/**
 * This is an auto generated file.
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
    public $durationOfWarranty;

    /**
     * The scope of the warranty promise.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope
     */
    public $warrantyScope;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/WarrantyPromise";

    /**
     * @param $durationOfWarranty Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addDurationOfWarranty($durationOfWarranty)
    {
        $this->durationOfWarranty []= $durationOfWarranty;
        return $this;
    }

    /**
     * @param $warrantyScope Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\WarrantyScope
     */
    public function addWarrantyScope($warrantyScope)
    {
        $this->warrantyScope []= $warrantyScope;
        return $this;
    }


}