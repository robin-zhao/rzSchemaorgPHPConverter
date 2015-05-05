<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
