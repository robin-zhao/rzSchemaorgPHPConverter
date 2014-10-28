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
    protected $equal;

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    protected $greater;

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    protected $greaterOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    protected $lesser;

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    protected $lesserOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
     *
     * @var Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    protected $nonEqual;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     * @var Example\Thing\Intangible\Enumeration|Example\Thing\Intangible\StructuredValue
     */
    protected $valueReference;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/QualitativeValue";

    /**
     * @return Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function getEqual()
    {
        return $this->equal;
    }

    /**
     * @param $equal Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function setEqual($equal)
    {
        $this->equal = $equal;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function getGreater()
    {
        return $this->greater;
    }

    /**
     * @param $greater Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function setGreater($greater)
    {
        $this->greater = $greater;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function getGreaterOrEqual()
    {
        return $this->greaterOrEqual;
    }

    /**
     * @param $greaterOrEqual Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function setGreaterOrEqual($greaterOrEqual)
    {
        $this->greaterOrEqual = $greaterOrEqual;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function getLesser()
    {
        return $this->lesser;
    }

    /**
     * @param $lesser Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function setLesser($lesser)
    {
        $this->lesser = $lesser;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function getLesserOrEqual()
    {
        return $this->lesserOrEqual;
    }

    /**
     * @param $lesserOrEqual Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function setLesserOrEqual($lesserOrEqual)
    {
        $this->lesserOrEqual = $lesserOrEqual;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function getNonEqual()
    {
        return $this->nonEqual;
    }

    /**
     * @param $nonEqual Example\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function setNonEqual($nonEqual)
    {
        $this->nonEqual = $nonEqual;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration|Example\Thing\Intangible\StructuredValue
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param $valueReference Example\Thing\Intangible\Enumeration|Example\Thing\Intangible\StructuredValue
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

}
