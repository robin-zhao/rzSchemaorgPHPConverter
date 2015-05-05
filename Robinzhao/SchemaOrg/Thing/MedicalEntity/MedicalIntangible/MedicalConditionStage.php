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
    public $stageAsNumber;

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     *
     * @var String
     */
    public $subStageSuffix;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalConditionStage";

    /**
     * @param $stageAsNumber Float
     */
    public function addStageAsNumber($stageAsNumber)
    {
        $this->stageAsNumber []= $stageAsNumber;
        return $this;
    }

    /**
     * @param $subStageSuffix String
     */
    public function addSubStageSuffix($subStageSuffix)
    {
        $this->subStageSuffix []= $subStageSuffix;
        return $this;
    }

}
