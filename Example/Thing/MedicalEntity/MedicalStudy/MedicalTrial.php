<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalStudy;

use Example\Thing\MedicalEntity\MedicalStudy;

/**
 * Medical Trial
 * http://schema.org/MedicalTrial
 */
class MedicalTrial extends MedicalStudy
{

    /**
     * The phase of the trial.
     *
     * @var String
     */
    private $phase;

    /**
     * Specifics about the trial design (enumerated).
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalTrialDesign
     */
    private $trialDesign;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalTrial";

    public function getPhase()
    {
        return $this->phase;
    }

    public function setPhase($phase)
    {
        $this->phase = $phase;
        return $this;
    }

    public function getTrialDesign()
    {
        return $this->trialDesign;
    }

    public function setTrialDesign($trialDesign)
    {
        $this->trialDesign = $trialDesign;
        return $this;
    }

}
