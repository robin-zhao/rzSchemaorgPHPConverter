<?php

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

/**
 * Dose Schedule
 * http://schema.org/DoseSchedule
 */
class DoseSchedule extends MedicalIntangible
{

    /**
     * The unit of the dose, e.g. 'mg'.
     *
     * @var String
     */
    private $doseUnit;

    /**
     * The value of the dose, e.g. 500.
     *
     * @var Float
     */
    private $doseValue;

    /**
     * How often the dose is taken, e.g. 'daily'.
     *
     * @var String
     */
    private $frequency;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     * @var String
     */
    private $targetPopulation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DoseSchedule";

    public function getdoseUnit()
    {
        return $this->doseUnit;
    }

    public function setdoseUnit($doseUnit)
    {
        $this->doseUnit = $doseUnit;
        return $this;
    }

    public function getdoseValue()
    {
        return $this->doseValue;
    }

    public function setdoseValue($doseValue)
    {
        $this->doseValue = $doseValue;
        return $this;
    }

    public function getfrequency()
    {
        return $this->frequency;
    }

    public function setfrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function gettargetPopulation()
    {
        return $this->targetPopulation;
    }

    public function settargetPopulation($targetPopulation)
    {
        $this->targetPopulation = $targetPopulation;
        return $this;
    }

}
