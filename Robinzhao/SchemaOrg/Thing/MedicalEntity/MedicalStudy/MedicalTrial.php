<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

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
    protected $phase;

    /**
     * Specifics about the trial design (enumerated).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalTrialDesign
     */
    protected $trialDesign;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalTrial";

    /**
     * @return String
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * @param $phase String
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalTrialDesign
     */
    public function getTrialDesign()
    {
        return $this->trialDesign;
    }

    /**
     * @param $trialDesign Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalTrialDesign
     */
    public function setTrialDesign($trialDesign)
    {
        $this->trialDesign = $trialDesign;
        return $this;
    }

}
