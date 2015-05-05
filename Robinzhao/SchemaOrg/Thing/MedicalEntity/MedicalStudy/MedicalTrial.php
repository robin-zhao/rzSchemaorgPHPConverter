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
    public $phase;

    /**
     * Specifics about the trial design (enumerated).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalTrialDesign
     */
    public $trialDesign;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalTrial";

    /**
     * @param $phase String
     */
    public function addPhase($phase)
    {
        $this->phase []= $phase;
        return $this;
    }

    /**
     * @param $trialDesign Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalTrialDesign
     */
    public function addTrialDesign($trialDesign)
    {
        $this->trialDesign []= $trialDesign;
        return $this;
    }

}
