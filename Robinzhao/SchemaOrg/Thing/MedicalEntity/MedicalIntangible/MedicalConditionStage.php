<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
 * Medical Condition Stage
 * http://schema.org/MedicalConditionStage
 */
class MedicalConditionStage extends MedicalIntangible
{

    /**
     * The stage represented as a number, e.g. 3.
     *
     * @var Float
     */
    protected $stageAsNumber;

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     *
     * @var String
     */
    protected $subStageSuffix;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalConditionStage";

    /**
     * @return Float
     */
    public function getStageAsNumber()
    {
        return $this->stageAsNumber;
    }

    /**
     * @param $stageAsNumber Float
     */
    public function setStageAsNumber($stageAsNumber)
    {
        $this->stageAsNumber = $stageAsNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getSubStageSuffix()
    {
        return $this->subStageSuffix;
    }

    /**
     * @param $subStageSuffix String
     */
    public function setSubStageSuffix($subStageSuffix)
    {
        $this->subStageSuffix = $subStageSuffix;
        return $this;
    }

}
