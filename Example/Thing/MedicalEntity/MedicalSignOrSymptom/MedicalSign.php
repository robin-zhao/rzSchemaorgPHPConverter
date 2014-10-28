<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalSignOrSymptom;

use Example\Thing\MedicalEntity\MedicalSignOrSymptom;

/**
 * Medical Sign
 * http://schema.org/MedicalSign
 */
class MedicalSign extends MedicalSignOrSymptom
{

    /**
     * A physical examination that can identify this sign.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalExam
     */
    private $identifyingExam;

    /**
     * A diagnostic test that can identify this sign.
     *
     * @var Example\Thing\MedicalEntity\MedicalTest
     */
    private $identifyingTest;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalSign";

    public function getidentifyingExam()
    {
        return $this->identifyingExam;
    }

    public function setidentifyingExam($identifyingExam)
    {
        $this->identifyingExam = $identifyingExam;
        return $this;
    }

    public function getidentifyingTest()
    {
        return $this->identifyingTest;
    }

    public function setidentifyingTest($identifyingTest)
    {
        $this->identifyingTest = $identifyingTest;
        return $this;
    }

}
