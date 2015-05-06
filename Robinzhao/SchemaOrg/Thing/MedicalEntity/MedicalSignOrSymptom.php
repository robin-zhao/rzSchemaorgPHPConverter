<?php
/**
 * This is an auto generated file.
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
    public $cause;

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $possibleTreatment;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalSignOrSymptom";

    /**
     * @param $cause Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCause
     */
    public function addCause($cause)
    {
        $this->cause []= $cause;
        return $this;
    }

    /**
     * @param $possibleTreatment Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment []= $possibleTreatment;
        return $this;
    }


}