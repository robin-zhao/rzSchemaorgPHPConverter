<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\MedicalOrganization;

use Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\MedicalOrganization;

/**
 * Medical Clinic
 * http://schema.org/MedicalClinic
 */
class MedicalClinic extends MedicalOrganization
{

    /**
     * A medical service available from this provider.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    protected $availableService;

    /**
     * A medical specialty of the provider.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    protected $medicalSpecialty;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalClinic";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function getAvailableService()
    {
        return $this->availableService;
    }

    /**
     * @param $availableService Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function setAvailableService($availableService)
    {
        $this->availableService = $availableService;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function getMedicalSpecialty()
    {
        return $this->medicalSpecialty;
    }

    /**
     * @param $medicalSpecialty Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function setMedicalSpecialty($medicalSpecialty)
    {
        $this->medicalSpecialty = $medicalSpecialty;
        return $this;
    }

}
