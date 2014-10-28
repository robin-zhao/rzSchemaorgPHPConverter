<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity\MedicalTest|Example\Thing\MedicalEntity\MedicalProcedure|Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $availableService;

    /**
     * A medical specialty of the provider.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    private $medicalSpecialty;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalClinic";

    /**
     * @return Example\Thing\MedicalEntity\MedicalTest|Example\Thing\MedicalEntity\MedicalProcedure|Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * @param $availableService Example\Thing\MedicalEntity\MedicalTest|Example\Thing\MedicalEntity\MedicalProcedure|Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function setAvailableService($availableService)
    {
        $this->availableService = $availableService;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    /**
     * @param $medicalSpecialty Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function setMedicalSpecialty($medicalSpecialty)
    {
        $this->medicalSpecialty = $medicalSpecialty;
        return $this;
    }

}
