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
    private $applicableLocation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DrugLegalStatus";

    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    public function setApplicableLocation($applicableLocation)
    {
        $this->applicableLocation = $applicableLocation;
        return $this;
    }

}
