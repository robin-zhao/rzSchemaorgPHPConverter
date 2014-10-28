<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Organization\LocalBusiness\MedicalOrganization;

use Example\Thing\Organization\LocalBusiness\MedicalOrganization;

/**
 * Diagnostic Lab
 * http://schema.org/DiagnosticLab
 */
class DiagnosticLab extends MedicalOrganization
{

    /**
     * A diagnostic test or procedure offered by this lab.
     *
     * @var Example\Thing\MedicalEntity\MedicalTest
     */
    private $availableTest;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DiagnosticLab";

    public function getavailableTest()
    {
        return $this->availableTest;
    }

    public function setavailableTest($availableTest)
    {
        $this->availableTest = $availableTest;
        return $this;
    }

}
