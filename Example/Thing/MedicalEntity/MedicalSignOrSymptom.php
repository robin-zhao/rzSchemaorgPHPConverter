<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Sign or Symptom
 * http://schema.org/MedicalSignOrSymptom
 */
class MedicalSignOrSymptom extends MedicalEntity
{

    /**
     * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
     *
     * @var Example\Thing\MedicalEntity\MedicalCause
     */
    private $cause;

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $possibleTreatment;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalSignOrSymptom";

    public function getCause()
    {
        return $this->cause;
    }

    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    public function setPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
        return $this;
    }

}
