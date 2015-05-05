<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

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
    public $dietFeatures;

    /**
     * People or organizations that endorse the plan.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $endorsers;

    /**
     * Medical expert advice related to the plan.
     *
     * @var String
     */
    public $expertConsiderations;

    /**
     * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
     *
     * @var String
     */
    public $overview;

    /**
     * Specific physiologic benefits associated to the plan.
     *
     * @var String
     */
    public $physiologicalBenefits;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     *
     * @var String
     */
    public $proprietaryName;

    /**
     * Specific physiologic risks associated to the plan.
     *
     * @var String
     */
    public $risks;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Diet";

    /**
     * @param $dietFeatures String
     */
    public function addDietFeatures($dietFeatures)
    {
        $this->dietFeatures []= $dietFeatures;
        return $this;
    }

    /**
     * @param $endorsers Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addEndorsers($endorsers)
    {
        $this->endorsers []= $endorsers;
        return $this;
    }

    /**
     * @param $expertConsiderations String
     */
    public function addExpertConsiderations($expertConsiderations)
    {
        $this->expertConsiderations []= $expertConsiderations;
        return $this;
    }

    /**
     * @param $overview String
     */
    public function addOverview($overview)
    {
        $this->overview []= $overview;
        return $this;
    }

    /**
     * @param $physiologicalBenefits String
     */
    public function addPhysiologicalBenefits($physiologicalBenefits)
    {
        $this->physiologicalBenefits []= $physiologicalBenefits;
        return $this;
    }

    /**
     * @param $proprietaryName String
     */
    public function addProprietaryName($proprietaryName)
    {
        $this->proprietaryName []= $proprietaryName;
        return $this;
    }

    /**
     * @param $risks String
     */
    public function addRisks($risks)
    {
        $this->risks []= $risks;
        return $this;
    }

}
