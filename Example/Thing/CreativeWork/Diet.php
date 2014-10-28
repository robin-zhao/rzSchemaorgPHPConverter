<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Diet
 * http://schema.org/Diet
 */
class Diet extends CreativeWork
{

    /**
     * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
     *
     * @var String
     */
    private $dietFeatures;

    /**
     * People or organizations that endorse the plan.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $endorsers;

    /**
     * Medical expert advice related to the plan.
     *
     * @var String
     */
    private $expertConsiderations;

    /**
     * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
     *
     * @var String
     */
    private $overview;

    /**
     * Specific physiologic benefits associated to the plan.
     *
     * @var String
     */
    private $physiologicalBenefits;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @var String
     */
    private $proprietaryName;

    /**
     * Specific physiologic risks associated to the plan.
     *
     * @var String
     */
    private $risks;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Diet";

    public function getDietFeatures()
    {
        return $this->dietFeatures;
    }

    public function setDietFeatures($dietFeatures)
    {
        $this->dietFeatures = $dietFeatures;
        return $this;
    }

    public function getEndorsers()
    {
        return $this->endorsers;
    }

    public function setEndorsers($endorsers)
    {
        $this->endorsers = $endorsers;
        return $this;
    }

    public function getExpertConsiderations()
    {
        return $this->expertConsiderations;
    }

    public function setExpertConsiderations($expertConsiderations)
    {
        $this->expertConsiderations = $expertConsiderations;
        return $this;
    }

    public function getOverview()
    {
        return $this->overview;
    }

    public function setOverview($overview)
    {
        $this->overview = $overview;
        return $this;
    }

    public function getPhysiologicalBenefits()
    {
        return $this->physiologicalBenefits;
    }

    public function setPhysiologicalBenefits($physiologicalBenefits)
    {
        $this->physiologicalBenefits = $physiologicalBenefits;
        return $this;
    }

    public function getProprietaryName()
    {
        return $this->proprietaryName;
    }

    public function setProprietaryName($proprietaryName)
    {
        $this->proprietaryName = $proprietaryName;
        return $this;
    }

    public function getRisks()
    {
        return $this->risks;
    }

    public function setRisks($risks)
    {
        $this->risks = $risks;
        return $this;
    }

}
