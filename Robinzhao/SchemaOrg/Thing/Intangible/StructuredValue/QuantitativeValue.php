<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Quantitative Value
 * http://schema.org/QuantitativeValue
 */
class QuantitativeValue extends StructuredValue
{

    /**
     * The upper of the product characteristic.
     *
     * @var Float
     */
    public $maxValue;

    /**
     * The lower value of the product characteristic.
     *
     * @var Float
     */
    public $minValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     *
     * @var String
     */
    public $unitCode;

    /**
     * The value of the product characteristic.
     *
     * @var Float
     */
    public $value;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue
     */
    public $valueReference;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/QuantitativeValue";

    /**
     * @param $maxValue Float
     */
    public function addMaxValue($maxValue)
    {
        $this->maxValue []= $maxValue;
        return $this;
    }

    /**
     * @param $minValue Float
     */
    public function addMinValue($minValue)
    {
        $this->minValue []= $minValue;
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

    /**
     * @param $value Float
     */
    public function addValue($value)
    {
        $this->value []= $value;
        return $this;
    }

    /**
     * @param $valueReference Robinzhao\SchemaOrg\Thing\Intangible\Enumeration|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue
     */
    public function addValueReference($valueReference)
    {
        $this->valueReference []= $valueReference;
        return $this;
    }


}