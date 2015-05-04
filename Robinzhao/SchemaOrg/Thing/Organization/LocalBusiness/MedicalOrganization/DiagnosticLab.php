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
    protected $availableTest;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DiagnosticLab";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function getAvailableTest()
    {
        return $this->availableTest;
    }

    /**
     * @param $availableTest Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function setAvailableTest($availableTest)
    {
        $this->availableTest = $availableTest;
        return $this;
    }

}
