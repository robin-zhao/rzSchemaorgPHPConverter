<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom;

/**
 * Medical Sign
 * http://schema.org/MedicalSign
 */
class MedicalSign extends MedicalSignOrSymptom
{

    /**
     * A physical examination that can identify this sign.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalExam
     */
    public $identifyingExam;

    /**
     * A diagnostic test that can identify this sign.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public $identifyingTest;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalSign";

    /**
     * @param $identifyingExam Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalExam
     */
    public function addIdentifyingExam($identifyingExam)
    {
        $this->identifyingExam []= $identifyingExam;
        return $this;
    }

    /**
     * @param $identifyingTest Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function addIdentifyingTest($identifyingTest)
    {
        $this->identifyingTest []= $identifyingTest;
        return $this;
    }

}
