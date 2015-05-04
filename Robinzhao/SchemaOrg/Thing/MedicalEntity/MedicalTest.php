<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Test
 * http://schema.org/MedicalTest
 */
class MedicalTest extends MedicalEntity
{

    /**
     * Drugs that affect the test's results.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    protected $affectedBy;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     *
     * @var String
     */
    protected $normalRange;

    /**
     * A sign detected by the test.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom\MedicalSign
     */
    protected $signDetected;

    /**
     * A condition the test is used to diagnose.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    protected $usedToDiagnose;

    /**
     * Device used to perform the test.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalDevice
     */
    protected $usesDevice;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalTest";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function getAffectedBy()
    {
        return $this->affectedBy;
    }

    /**
     * @param $affectedBy Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function setAffectedBy($affectedBy)
    {
        $this->affectedBy = $affectedBy;
        return $this;
    }

    /**
     * @return String
     */
    public function getNormalRange()
    {
        return $this->normalRange;
    }

    /**
     * @param $normalRange String
     */
    public function setNormalRange($normalRange)
    {
        $this->normalRange = $normalRange;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom\MedicalSign
     */
    public function getSignDetected()
    {
        return $this->signDetected;
    }

    /**
     * @param $signDetected Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom\MedicalSign
     */
    public function setSignDetected($signDetected)
    {
        $this->signDetected = $signDetected;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function getUsedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    /**
     * @param $usedToDiagnose Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function setUsedToDiagnose($usedToDiagnose)
    {
        $this->usedToDiagnose = $usedToDiagnose;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalDevice
     */
    public function getUsesDevice()
    {
        return $this->usesDevice;
    }

    /**
     * @param $usesDevice Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalDevice
     */
    public function setUsesDevice($usesDevice)
    {
        $this->usesDevice = $usesDevice;
        return $this;
    }

}
