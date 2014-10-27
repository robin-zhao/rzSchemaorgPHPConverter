<?php

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

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
    private $stageAsNumber;

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     *
     * @var String
     */
    private $subStageSuffix;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalConditionStage";

    public function getstageAsNumber()
    {
        return $this->stageAsNumber;
    }

    public function setstageAsNumber($stageAsNumber)
    {
        $this->stageAsNumber = $stageAsNumber;
        return $this;
    }

    public function getsubStageSuffix()
    {
        return $this->subStageSuffix;
    }

    public function setsubStageSuffix($subStageSuffix)
    {
        $this->subStageSuffix = $subStageSuffix;
        return $this;
    }

}
