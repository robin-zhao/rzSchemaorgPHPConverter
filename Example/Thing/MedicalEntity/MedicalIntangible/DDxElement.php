<?php

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
    private $diagnosis;

    /**
     * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
     *
     * @var Example\Thing\MedicalEntity\MedicalSignOrSymptom
     */
    private $distinguishingSign;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DDxElement";

    public function getdiagnosis()
    {
        return $this->diagnosis;
    }

    public function setdiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    public function getdistinguishingSign()
    {
        return $this->distinguishingSign;
    }

    public function setdistinguishingSign($distinguishingSign)
    {
        $this->distinguishingSign = $distinguishingSign;
        return $this;
    }

}
