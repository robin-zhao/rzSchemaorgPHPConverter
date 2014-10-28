<?php

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

    public function getestimatesRiskOf()
    {
        return $this->estimatesRiskOf;
    }

    public function setestimatesRiskOf($estimatesRiskOf)
    {
        $this->estimatesRiskOf = $estimatesRiskOf;
        return $this;
    }

    public function getincludedRiskFactor()
    {
        return $this->includedRiskFactor;
    }

    public function setincludedRiskFactor($includedRiskFactor)
    {
        $this->includedRiskFactor = $includedRiskFactor;
        return $this;
    }

}
