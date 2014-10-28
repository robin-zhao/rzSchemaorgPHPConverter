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
    protected $dietFeatures;

    /**
     * People or organizations that endorse the plan.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    protected $endorsers;

    /**
     * Medical expert advice related to the plan.
     *
     * @var String
     */
    protected $expertConsiderations;

    /**
     * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
     *
     * @var String
     */
    protected $overview;

    /**
     * Specific physiologic benefits associated to the plan.
     *
     * @var String
     */
    protected $physiologicalBenefits;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @var String
     */
    protected $proprietaryName;

    /**
     * Specific physiologic risks associated to the plan.
     *
     * @var String
     */
    protected $risks;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Diet";

    /**
     * @return String
     */
    public function getDietFeatures()
    {
        return $this->dietFeatures;
    }

    /**
     * @param $dietFeatures String
     */
    public function setDietFeatures($dietFeatures)
    {
        $this->dietFeatures = $dietFeatures;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getEndorsers()
    {
        return $this->endorsers;
    }

    /**
     * @param $endorsers Example\Thing\Organization|Example\Thing\Person
     */
    public function setEndorsers($endorsers)
    {
        $this->endorsers = $endorsers;
        return $this;
    }

    /**
     * @return String
     */
    public function getExpertConsiderations()
    {
        return $this->expertConsiderations;
    }

    /**
     * @param $expertConsiderations String
     */
    public function setExpertConsiderations($expertConsiderations)
    {
        $this->expertConsiderations = $expertConsiderations;
        return $this;
    }

    /**
     * @return String
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param $overview String
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
        return $this;
    }

    /**
     * @return String
     */
    public function getPhysiologicalBenefits()
    {
        return $this->physiologicalBenefits;
    }

    /**
     * @param $physiologicalBenefits String
     */
    public function setPhysiologicalBenefits($physiologicalBenefits)
    {
        $this->physiologicalBenefits = $physiologicalBenefits;
        return $this;
    }

    /**
     * @return String
     */
    public function getProprietaryName()
    {
        return $this->proprietaryName;
    }

    /**
     * @param $proprietaryName String
     */
    public function setProprietaryName($proprietaryName)
    {
        $this->proprietaryName = $proprietaryName;
        return $this;
    }

    /**
     * @return String
     */
    public function getRisks()
    {
        return $this->risks;
    }

    /**
     * @param $risks String
     */
    public function setRisks($risks)
    {
        $this->risks = $risks;
        return $this;
    }

}
