<?php

namespace Example\Thing\Organization\LocalBusiness\MedicalOrganization;

use Example\Thing\Organization\LocalBusiness\MedicalOrganization;

/**
 * Medical Clinic
 * http://schema.org/MedicalClinic
 */
class MedicalClinic extends MedicalOrganization
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
    private $url = "http://schema.org/MedicalClinic";

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
