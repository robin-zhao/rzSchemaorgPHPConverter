<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity
     */
    private $increasesRiskOf;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalRiskFactor";

    public function getIncreasesRiskOf()
    {
        return $this->increasesRiskOf;
    }

    public function setIncreasesRiskOf($increasesRiskOf)
    {
        $this->increasesRiskOf = $increasesRiskOf;
        return $this;
    }

}
