<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $maxValue;

    /**
     * The lower value of the product characteristic.
     *
     * @var Float
     */
    protected $minValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     *
     * @var String
     */
    protected $unitCode;

    /**
     * The value of the product characteristic.
     *
     * @var Float
     */
    protected $value;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue
     */
    protected $valueReference;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/QuantitativeValue";

    /**
     * @return Float
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param $maxValue Float
     */
    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
        return $this;
    }

    /**
     * @return Float
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param $minValue Float
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
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

    /**
     * @return Float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value Float
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param $valueReference Robinzhao\SchemaOrg\Thing\Intangible\Enumeration|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

}
