<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Sign or Symptom
 * http://schema.org/MedicalSignOrSymptom
 */
class MedicalSignOrSymptom extends MedicalEntity
{

    /**
     * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCause
     */
    protected $cause;

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    protected $possibleTreatment;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalSignOrSymptom";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCause
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * @param $cause Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCause
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    /**
     * @param $possibleTreatment Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function setPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
        return $this;
    }

}
