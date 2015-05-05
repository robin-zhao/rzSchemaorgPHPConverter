<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Risk Estimator
 * http://schema.org/MedicalRiskEstimator
 */
class MedicalRiskEstimator extends MedicalEntity
{

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $estimatesRiskOf;

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor
     */
    public $includedRiskFactor;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalRiskEstimator";

    /**
     * @param $estimatesRiskOf Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addEstimatesRiskOf($estimatesRiskOf)
    {
        $this->estimatesRiskOf []= $estimatesRiskOf;
        return $this;
    }

    /**
     * @param $includedRiskFactor Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor
     */
    public function addIncludedRiskFactor($includedRiskFactor)
    {
        $this->includedRiskFactor []= $includedRiskFactor;
        return $this;
    }

}
