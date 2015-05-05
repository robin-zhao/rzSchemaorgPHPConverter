<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Place\CivicStructure;

use Robinzhao\SchemaOrg\Thing\Place\CivicStructure;

/**
 * Hospital
 * http://schema.org/Hospital
 */
class Hospital extends CivicStructure
{

    /**
     * A medical service available from this provider.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $availableService;

    /**
     * A medical specialty of the provider.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public $medicalSpecialty;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Hospital";

    /**
     * @param $availableService Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addAvailableService($availableService)
    {
        $this->availableService []= $availableService;
        return $this;
    }

    /**
     * @param $medicalSpecialty Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function addMedicalSpecialty($medicalSpecialty)
    {
        $this->medicalSpecialty []= $medicalSpecialty;
        return $this;
    }

}
