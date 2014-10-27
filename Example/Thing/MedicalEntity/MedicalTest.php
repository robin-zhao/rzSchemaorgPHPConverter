<?php

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
     * @var Drug
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
     * @var MedicalSign
     */
    private $signDetected;

    /**
     * A condition the test is used to diagnose.
     *
     * @var MedicalCondition
     */
    private $usedToDiagnose;

    /**
     * Device used to perform the test.
     *
     * @var MedicalDevice
     */
    private $usesDevice;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalTest";

    public function getaffectedBy()
    {
        return $this->affectedBy;
    }

    public function setaffectedBy($affectedBy)
    {
        $this->affectedBy = $affectedBy;
        return $this;
    }

    public function getnormalRange()
    {
        return $this->normalRange;
    }

    public function setnormalRange($normalRange)
    {
        $this->normalRange = $normalRange;
        return $this;
    }

    public function getsignDetected()
    {
        return $this->signDetected;
    }

    public function setsignDetected($signDetected)
    {
        $this->signDetected = $signDetected;
        return $this;
    }

    public function getusedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    public function setusedToDiagnose($usedToDiagnose)
    {
        $this->usedToDiagnose = $usedToDiagnose;
        return $this;
    }

    public function getusesDevice()
    {
        return $this->usesDevice;
    }

    public function setusesDevice($usesDevice)
    {
        $this->usesDevice = $usesDevice;
        return $this;
    }

}