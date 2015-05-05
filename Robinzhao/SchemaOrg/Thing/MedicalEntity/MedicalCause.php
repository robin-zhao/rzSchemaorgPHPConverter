<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Cause
 * http://schema.org/MedicalCause
 */
class MedicalCause extends MedicalEntity
{

    /**
     * The condition, complication, symptom, sign, etc. caused.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $causeOf;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalCause";

    /**
     * @param $causeOf Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addCauseOf($causeOf)
    {
        $this->causeOf []= $causeOf;
        return $this;
    }

}
