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
    protected $algorithm;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalRiskScore";

    /**
     * @return String
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * @param $algorithm String
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

}
