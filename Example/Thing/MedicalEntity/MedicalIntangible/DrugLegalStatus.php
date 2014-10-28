<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

/**
 * Drug Legal Status
 * http://schema.org/DrugLegalStatus
 */
class DrugLegalStatus extends MedicalIntangible
{

    /**
     * The location in which the status applies.
     *
     * @var Example\Thing\Place\AdministrativeArea
     */
    protected $applicableLocation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DrugLegalStatus";

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    /**
     * @param $applicableLocation Example\Thing\Place\AdministrativeArea
     */
    public function setApplicableLocation($applicableLocation)
    {
        $this->applicableLocation = $applicableLocation;
        return $this;
    }

}
