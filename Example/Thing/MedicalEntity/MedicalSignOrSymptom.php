<?php

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

    public function getcause()
    {
        return $this->cause;
    }

    public function setcause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    public function getpossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    public function setpossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
        return $this;
    }

}
