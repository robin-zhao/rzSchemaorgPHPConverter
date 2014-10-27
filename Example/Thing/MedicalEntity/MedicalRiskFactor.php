<?php

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Medical Risk Factor
 * http://schema.org/MedicalRiskFactor
 */
class MedicalRiskFactor extends MedicalEntity
{

    /**
     * The condition, complication, etc. influenced by this factor.
     *
     * @var MedicalEntity
     */
    private $increasesRiskOf;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalRiskFactor";

    public function getincreasesRiskOf()
    {
        return $this->increasesRiskOf;
    }

    public function setincreasesRiskOf($increasesRiskOf)
    {
        $this->increasesRiskOf = $increasesRiskOf;
        return $this;
    }

}