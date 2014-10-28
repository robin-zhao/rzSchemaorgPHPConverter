<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Test
 * http://schema.org/MedicalTest
 */
class MedicalTest extends MedicalEntity
{

    /**
     * Drugs that affect the test's results.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    private $affectedBy;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     *
     * @var String
     */
    private $normalRange;

    /**
     * A sign detected by the test.
     *
     * @var Example\Thing\MedicalEntity\MedicalSignOrSymptom\MedicalSign
     */
    private $signDetected;

    /**
     * A condition the test is used to diagnose.
     *
     * @var Example\Thing\MedicalEntity\MedicalCondition
     */
    private $usedToDiagnose;

    /**
     * Device used to perform the test.
     *
     * @var Example\Thing\MedicalEntity\MedicalDevice
     */
    private $usesDevice;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalTest";

    public function getAffectedBy()
    {
        return $this->affectedBy;
    }

    public function setAffectedBy($affectedBy)
    {
        $this->affectedBy = $affectedBy;
        return $this;
    }

    public function getNormalRange()
    {
        return $this->normalRange;
    }

    public function setNormalRange($normalRange)
    {
        $this->normalRange = $normalRange;
        return $this;
    }

    public function getSignDetected()
    {
        return $this->signDetected;
    }

    public function setSignDetected($signDetected)
    {
        $this->signDetected = $signDetected;
        return $this;
    }

    public function getUsedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    public function setUsedToDiagnose($usedToDiagnose)
    {
        $this->usedToDiagnose = $usedToDiagnose;
        return $this;
    }

    public function getUsesDevice()
    {
        return $this->usesDevice;
    }

    public function setUsesDevice($usesDevice)
    {
        $this->usesDevice = $usesDevice;
        return $this;
    }

}
