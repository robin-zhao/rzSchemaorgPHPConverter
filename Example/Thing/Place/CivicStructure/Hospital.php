<?php

namespace Example\Thing\Place\CivicStructure;

use Example\Thing\Place\CivicStructure;

/**
 * Hospital
 * http://schema.org/Hospital
 */
class Hospital extends CivicStructure
{

    /**
     * A medical service available from this provider.
     *
     * @var MedicalTest|MedicalProcedure|MedicalTherapy
     */
    private $availableService;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty
     */
    private $medicalSpecialty;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Hospital";

    public function getavailableService()
    {
        return $this->availableService;
    }

    public function setavailableService($availableService)
    {
        $this->availableService = $availableService;
        return $this;
    }

    public function getmedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    public function setmedicalSpecialty($medicalSpecialty)
    {
        $this->medicalSpecialty = $medicalSpecialty;
        return $this;
    }

}