<?php
/**
 * This is an auto generated file.
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
    public $affectedBy;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     *
     * @var String
     */
    public $normalRange;

    /**
     * A sign detected by the test.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom\MedicalSign
     */
    public $signDetected;

    /**
     * A condition the test is used to diagnose.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public $usedToDiagnose;

    /**
     * Device used to perform the test.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalDevice
     */
    public $usesDevice;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalTest";

    /**
     * @param $affectedBy Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function addAffectedBy($affectedBy)
    {
        $this->affectedBy []= $affectedBy;
        return $this;
    }

    /**
     * @param $normalRange String
     */
    public function addNormalRange($normalRange)
    {
        $this->normalRange []= $normalRange;
        return $this;
    }

    /**
     * @param $signDetected Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom\MedicalSign
     */
    public function addSignDetected($signDetected)
    {
        $this->signDetected []= $signDetected;
        return $this;
    }

    /**
     * @param $usedToDiagnose Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function addUsedToDiagnose($usedToDiagnose)
    {
        $this->usedToDiagnose []= $usedToDiagnose;
        return $this;
    }

    /**
     * @param $usesDevice Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalDevice
     */
    public function addUsesDevice($usesDevice)
    {
        $this->usesDevice []= $usesDevice;
        return $this;
    }


}