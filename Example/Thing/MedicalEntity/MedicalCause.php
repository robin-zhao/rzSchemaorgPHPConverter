<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Cause
 * http://schema.org/MedicalCause
 */
class MedicalCause extends MedicalEntity
{

    /**
     * The condition, complication, symptom, sign, etc. caused.
     *
     * @var Example\Thing\MedicalEntity
     */
    private $causeOf;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalCause";

    /**
     * @return Example\Thing\MedicalEntity
     */
    public function getCauseOf()
    {
        return $this->causeOf;
    }

    /**
     * @param $causeOf Example\Thing\MedicalEntity
     */
    public function setCauseOf($causeOf)
    {
        $this->causeOf = $causeOf;
        return $this;
    }

}
