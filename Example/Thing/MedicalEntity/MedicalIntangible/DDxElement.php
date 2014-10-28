<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

/**
 * D Dx Element
 * http://schema.org/DDxElement
 */
class DDxElement extends MedicalIntangible
{

    /**
     * One or more alternative conditions considered in the differential diagnosis process.
     *
     * @var Example\Thing\MedicalEntity\MedicalCondition
     */
    protected $diagnosis;

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
     *
     * @var Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    protected $distinguishingSign;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DDxElement";

    /**
     * @return Example\Thing\MedicalEntity\MedicalCondition
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * @param $diagnosis Example\Thing\MedicalEntity\MedicalCondition
     */
    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public function getDistinguishingSign()
    {
        return $this->distinguishingSign;
    }

    /**
     * @param $distinguishingSign Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    public function setDistinguishingSign($distinguishingSign)
    {
        $this->distinguishingSign = $distinguishingSign;
        return $this;
    }

}
