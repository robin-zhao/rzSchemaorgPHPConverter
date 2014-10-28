<?php

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

    public function getapplicableLocation()
    {
        return $this->applicableLocation;
    }

    public function setapplicableLocation($applicableLocation)
    {
        $this->applicableLocation = $applicableLocation;
        return $this;
    }

}
