<?php

namespace Example\Thing\Organization\LocalBusiness\MedicalOrganization;

use Example\Thing\Organization\LocalBusiness\MedicalOrganization;

/**
 * Physician
 * http://schema.org/Physician
 */
class Physician extends MedicalOrganization
{

    /**
     * A medical service available from this provider.
     *
     * @var MedicalTest|MedicalProcedure|MedicalTherapy
     */
    private $availableService;

    /**
     * A hospital with which the physician or office is affiliated.
     *
     * @var Hospital
     */
    private $hospitalAffiliation;

    /**
     * A medical specialty of the provider.
     *
     * @var MedicalSpecialty
     */
    private $medicalSpecialty;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Physician";

    public function getavailableService()
    {
        return $this->availableService;
    }

    public function setavailableService($availableService)
    {
        $this->availableService = $availableService;
        return $this;
    }

    public function gethospitalAffiliation()
    {
        return $this->hospitalAffiliation;
    }

    public function sethospitalAffiliation($hospitalAffiliation)
    {
        $this->hospitalAffiliation = $hospitalAffiliation;
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
