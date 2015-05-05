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
    public $doseUnit;

    /**
     * The value of the dose, e.g. 500.
     *
     * @var Float
     */
    public $doseValue;

    /**
     * How often the dose is taken, e.g. 'daily'.
     *
     * @var String
     */
    public $frequency;

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     *
     * @var String
     */
    public $targetPopulation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DoseSchedule";

    /**
     * @param $doseUnit String
     */
    public function addDoseUnit($doseUnit)
    {
        $this->doseUnit []= $doseUnit;
        return $this;
    }

    /**
     * @param $doseValue Float
     */
    public function addDoseValue($doseValue)
    {
        $this->doseValue []= $doseValue;
        return $this;
    }

    /**
     * @param $frequency String
     */
    public function addFrequency($frequency)
    {
        $this->frequency []= $frequency;
        return $this;
    }

    /**
     * @param $targetPopulation String
     */
    public function addTargetPopulation($targetPopulation)
    {
        $this->targetPopulation []= $targetPopulation;
        return $this;
    }

}
