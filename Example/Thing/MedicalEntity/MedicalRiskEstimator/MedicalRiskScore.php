<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalRiskEstimator;

use Example\Thing\MedicalEntity\MedicalRiskEstimator;

/**
 * Medical Risk Score
 * http://schema.org/MedicalRiskScore
 */
class MedicalRiskScore extends MedicalRiskEstimator
{

    /**
     * The algorithm or rules to follow to compute the score.
     *
     * @var String
     */
    private $algorithm;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalRiskScore";

    public function getalgorithm()
    {
        return $this->algorithm;
    }

    public function setalgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

}
