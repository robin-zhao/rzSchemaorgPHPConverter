<?php

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

    public function getphase()
    {
        return $this->phase;
    }

    public function setphase($phase)
    {
        $this->phase = $phase;
        return $this;
    }

    public function gettrialDesign()
    {
        return $this->trialDesign;
    }

    public function settrialDesign($trialDesign)
    {
        $this->trialDesign = $trialDesign;
        return $this;
    }

}
