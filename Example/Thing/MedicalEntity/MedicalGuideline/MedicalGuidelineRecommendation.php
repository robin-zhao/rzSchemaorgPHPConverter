<?php

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

    public function getrecommendationStrength()
    {
        return $this->recommendationStrength;
    }

    public function setrecommendationStrength($recommendationStrength)
    {
        $this->recommendationStrength = $recommendationStrength;
        return $this;
    }

}
