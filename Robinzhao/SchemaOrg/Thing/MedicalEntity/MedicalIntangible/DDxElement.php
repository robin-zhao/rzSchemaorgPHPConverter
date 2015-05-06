<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
 * D Dx Element
 * http://schema.org/DDxElement
 */
class DDxElement extends MedicalIntangible
{

    /**
     * One or more alternative conditions considered in the differential diagnosis process.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public $diagnosis;

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public $distinguishingSign;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DDxElement";

    /**
     * @param $diagnosis Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis []= $diagnosis;
        return $this;
    }

    /**
     * @param $distinguishingSign Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public function addDistinguishingSign($distinguishingSign)
    {
        $this->distinguishingSign []= $distinguishingSign;
        return $this;
    }


}