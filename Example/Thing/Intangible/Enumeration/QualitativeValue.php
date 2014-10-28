<?php

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

    public function getequal()
    {
        return $this->equal;
    }

    public function setequal($equal)
    {
        $this->equal = $equal;
        return $this;
    }

    public function getgreater()
    {
        return $this->greater;
    }

    public function setgreater($greater)
    {
        $this->greater = $greater;
        return $this;
    }

    public function getgreaterOrEqual()
    {
        return $this->greaterOrEqual;
    }

    public function setgreaterOrEqual($greaterOrEqual)
    {
        $this->greaterOrEqual = $greaterOrEqual;
        return $this;
    }

    public function getlesser()
    {
        return $this->lesser;
    }

    public function setlesser($lesser)
    {
        $this->lesser = $lesser;
        return $this;
    }

    public function getlesserOrEqual()
    {
        return $this->lesserOrEqual;
    }

    public function setlesserOrEqual($lesserOrEqual)
    {
        $this->lesserOrEqual = $lesserOrEqual;
        return $this;
    }

    public function getnonEqual()
    {
        return $this->nonEqual;
    }

    public function setnonEqual($nonEqual)
    {
        $this->nonEqual = $nonEqual;
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
