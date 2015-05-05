<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\MedicalOrganization;

use Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\MedicalOrganization;

/**
 * Diagnostic Lab
 * http://schema.org/DiagnosticLab
 */
class DiagnosticLab extends MedicalOrganization
{

    /**
     * A diagnostic test or procedure offered by this lab.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public $availableTest;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DiagnosticLab";

    /**
     * @param $availableTest Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function addAvailableTest($availableTest)
    {
        $this->availableTest []= $availableTest;
        return $this;
    }

}
