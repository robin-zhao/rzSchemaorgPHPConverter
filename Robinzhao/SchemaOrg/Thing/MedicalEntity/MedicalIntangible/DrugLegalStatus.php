<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
 * Drug Legal Status
 * http://schema.org/DrugLegalStatus
 */
class DrugLegalStatus extends MedicalIntangible
{

    /**
     * The location in which the status applies.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $applicableLocation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DrugLegalStatus";

    /**
     * @param $applicableLocation Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addApplicableLocation($applicableLocation)
    {
        $this->applicableLocation []= $applicableLocation;
        return $this;
    }

}
