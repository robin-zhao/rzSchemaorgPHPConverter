<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

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
    protected $doseUnit;

    /**
     * The value of the dose, e.g. 500.
     *
     * @var Float
     */
    protected $doseValue;

    /**
     * How often the dose is taken, e.g. 'daily'.
     *
     * @var String
     */
    protected $frequency;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     * @var String
     */
    protected $targetPopulation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DoseSchedule";

    /**
     * @return String
     */
    public function getDoseUnit()
    {
        return $this->doseUnit;
    }

    /**
     * @param $doseUnit String
     */
    public function setDoseUnit($doseUnit)
    {
        $this->doseUnit = $doseUnit;
        return $this;
    }

    /**
     * @return Float
     */
    public function getDoseValue()
    {
        return $this->doseValue;
    }

    /**
     * @param $doseValue Float
     */
    public function setDoseValue($doseValue)
    {
        $this->doseValue = $doseValue;
        return $this;
    }

    /**
     * @return String
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param $frequency String
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return String
     */
    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    /**
     * @param $targetPopulation String
     */
    public function setTargetPopulation($targetPopulation)
    {
        $this->targetPopulation = $targetPopulation;
        return $this;
    }

}
