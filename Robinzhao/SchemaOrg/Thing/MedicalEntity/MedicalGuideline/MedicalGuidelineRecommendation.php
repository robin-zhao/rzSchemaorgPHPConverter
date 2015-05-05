<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

/**
 * Medical Guideline Recommendation
 * http://schema.org/MedicalGuidelineRecommendation
 */
class MedicalGuidelineRecommendation extends MedicalGuideline
{

    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     *
     * @var String
     */
    public $recommendationStrength;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalGuidelineRecommendation";

    /**
     * @param $recommendationStrength String
     */
    public function addRecommendationStrength($recommendationStrength)
    {
        $this->recommendationStrength []= $recommendationStrength;
        return $this;
    }

}
