<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalGuideline;

use Example\Thing\MedicalEntity\MedicalGuideline;

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
    private $recommendationStrength;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalGuidelineRecommendation";

    /**
     * @return String
     */
    public function getRecommendationStrength()
    {
        return $this->recommendationStrength;
    }

    /**
     * @param $recommendationStrength String
     */
    public function setRecommendationStrength($recommendationStrength)
    {
        $this->recommendationStrength = $recommendationStrength;
        return $this;
    }

}
