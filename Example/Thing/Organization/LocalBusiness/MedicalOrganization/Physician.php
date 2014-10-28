<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity\MedicalTest|Example\Thing\MedicalEntity\MedicalProcedure|Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $availableService;

    /**
     * A hospital with which the physician or office is affiliated.
     *
     * @var Example\Thing\Place\CivicStructure\Hospital
     */
    private $hospitalAffiliation;

    /**
     * A medical specialty of the provider.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    private $medicalSpecialty;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Physician";

    public function getAvailableService()
    {
        return $this->availableService;
    }

    public function setAvailableService($availableService)
    {
        $this->availableService = $availableService;
        return $this;
    }

    public function getHospitalAffiliation()
    {
        return $this->hospitalAffiliation;
    }

    public function setHospitalAffiliation($hospitalAffiliation)
    {
        $this->hospitalAffiliation = $hospitalAffiliation;
        return $this;
    }

    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    public function setMedicalSpecialty($medicalSpecialty)
    {
        $this->medicalSpecialty = $medicalSpecialty;
        return $this;
    }

}
