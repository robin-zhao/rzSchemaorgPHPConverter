<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Enumeration;

use Example\Thing\Intangible\Enumeration;

/**
 * Qualitative Value
 * http://schema.org/QualitativeValue
 */
class QualitativeValue extends Enumeration
{

    /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    private $equal;

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    private $greater;

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    private $greaterOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    private $lesser;

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    private $lesserOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    private $nonEqual;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     * @var Example\Thing\Intangible\Enumeration|Example\Thing\Intangible\StructuredValue
     */
    private $valueReference;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/QualitativeValue";

    public function getEqual()
    {
        return $this->equal;
    }

    public function setEqual($equal)
    {
        $this->equal = $equal;
        return $this;
    }

    public function getGreater()
    {
        return $this->greater;
    }

    public function setGreater($greater)
    {
        $this->greater = $greater;
        return $this;
    }

    public function getGreaterOrEqual()
    {
        return $this->greaterOrEqual;
    }

    public function setGreaterOrEqual($greaterOrEqual)
    {
        $this->greaterOrEqual = $greaterOrEqual;
        return $this;
    }

    public function getLesser()
    {
        return $this->lesser;
    }

    public function setLesser($lesser)
    {
        $this->lesser = $lesser;
        return $this;
    }

    public function getLesserOrEqual()
    {
        return $this->lesserOrEqual;
    }

    public function setLesserOrEqual($lesserOrEqual)
    {
        $this->lesserOrEqual = $lesserOrEqual;
        return $this;
    }

    public function getNonEqual()
    {
        return $this->nonEqual;
    }

    public function setNonEqual($nonEqual)
    {
        $this->nonEqual = $nonEqual;
        return $this;
    }

    public function getValueReference()
    {
        return $this->valueReference;
    }

    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

}
