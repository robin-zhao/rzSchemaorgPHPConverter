<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Risk Estimator
 * http://schema.org/MedicalRiskEstimator
 */
class MedicalRiskEstimator extends MedicalEntity
{

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     *
     * @var Example\Thing\MedicalEntity
     */
    private $estimatesRiskOf;

    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
     *
     * @var Example\Thing\MedicalEntity\MedicalRiskFactor
     */
    private $includedRiskFactor;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalRiskEstimator";

    /**
     * @return Example\Thing\MedicalEntity
     */
    public function getEstimatesRiskOf()
    {
        return $this->estimatesRiskOf;
    }

    /**
     * @param $estimatesRiskOf Example\Thing\MedicalEntity
     */
    public function setEstimatesRiskOf($estimatesRiskOf)
    {
        $this->estimatesRiskOf = $estimatesRiskOf;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalRiskFactor
     */
    public function getIncludedRiskFactor()
    {
        return $this->includedRiskFactor;
    }

    /**
     * @param $includedRiskFactor Example\Thing\MedicalEntity\MedicalRiskFactor
     */
    public function setIncludedRiskFactor($includedRiskFactor)
    {
        $this->includedRiskFactor = $includedRiskFactor;
        return $this;
    }

}
