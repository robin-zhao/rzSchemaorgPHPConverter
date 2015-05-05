<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Enumeration;

use Robinzhao\SchemaOrg\Thing\Intangible\Enumeration;

/**
 * Qualitative Value
 * http://schema.org/QualitativeValue
 */
class QualitativeValue extends Enumeration
{

    /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public $equal;

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public $greater;

    /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public $greaterOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public $lesser;

    /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public $lesserOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public $nonEqual;

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
    public $context = "http://schema.org/QualitativeValue";

    /**
     * @param $equal Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function addEqual($equal)
    {
        $this->equal []= $equal;
        return $this;
    }

    /**
     * @param $greater Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function addGreater($greater)
    {
        $this->greater []= $greater;
        return $this;
    }

    /**
     * @param $greaterOrEqual Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function addGreaterOrEqual($greaterOrEqual)
    {
        $this->greaterOrEqual []= $greaterOrEqual;
        return $this;
    }

    /**
     * @param $lesser Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function addLesser($lesser)
    {
        $this->lesser []= $lesser;
        return $this;
    }

    /**
     * @param $lesserOrEqual Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function addLesserOrEqual($lesserOrEqual)
    {
        $this->lesserOrEqual []= $lesserOrEqual;
        return $this;
    }

    /**
     * @param $nonEqual Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue
     */
    public function addNonEqual($nonEqual)
    {
        $this->nonEqual []= $nonEqual;
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
