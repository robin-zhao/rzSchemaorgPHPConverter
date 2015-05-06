<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

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
    public $algorithm;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalRiskScore";

    /**
     * @param $algorithm String
     */
    public function addAlgorithm($algorithm)
    {
        $this->algorithm []= $algorithm;
        return $this;
    }


}