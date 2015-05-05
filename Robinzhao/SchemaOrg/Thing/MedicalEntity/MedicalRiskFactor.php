<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Medical Risk Factor
 * http://schema.org/MedicalRiskFactor
 */
class MedicalRiskFactor extends MedicalEntity
{

    /**
     * The condition, complication, etc. influenced by this factor.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public $increasesRiskOf;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalRiskFactor";

    /**
     * @param $increasesRiskOf Robinzhao\SchemaOrg\Thing\MedicalEntity
     */
    public function addIncreasesRiskOf($increasesRiskOf)
    {
        $this->increasesRiskOf []= $increasesRiskOf;
        return $this;
    }

}
