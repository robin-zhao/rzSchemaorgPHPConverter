<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

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
    private $maxValue;

    /**
     * The lower value of the product characteristic.
     *
     * @var Float
     */
    private $minValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
     *
     * @var String
     */
    private $unitCode;

    /**
     * The value of the product characteristic.
     *
     * @var Float
     */
    private $value;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     * @var Example\Thing\Intangible\Enumeration|Example\Thing\Intangible\StructuredValue
     */
    private $valueReference;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/QuantitativeValue";

    public function getmaxValue()
    {
        return $this->maxValue;
    }

    public function setmaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
        return $this;
    }

    public function getminValue()
    {
        return $this->minValue;
    }

    public function setminValue($minValue)
    {
        $this->minValue = $minValue;
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

    public function getvalue()
    {
        return $this->value;
    }

    public function setvalue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getvalueReference()
    {
        return $this->valueReference;
    }

    public function setvalueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

}
