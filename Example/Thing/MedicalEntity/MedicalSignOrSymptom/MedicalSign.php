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
    protected $identifyingExam;

    /**
     * A diagnostic test that can identify this sign.
     *
     * @var Example\Thing\MedicalEntity\MedicalTest
     */
    protected $identifyingTest;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalSign";

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalExam
     */
    public function getIdentifyingExam()
    {
        return $this->identifyingExam;
    }

    /**
     * @param $identifyingExam Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalExam
     */
    public function setIdentifyingExam($identifyingExam)
    {
        $this->identifyingExam = $identifyingExam;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalTest
     */
    public function getIdentifyingTest()
    {
        return $this->identifyingTest;
    }

    /**
     * @param $identifyingTest Example\Thing\MedicalEntity\MedicalTest
     */
    public function setIdentifyingTest($identifyingTest)
    {
        $this->identifyingTest = $identifyingTest;
        return $this;
    }

}
