<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalTherapy;

use Example\Thing\MedicalEntity\MedicalTherapy;

/**
 * Drug Class
 * http://schema.org/DrugClass
 */
class DrugClass extends MedicalTherapy
{

    /**
     * A drug in this drug class.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    private $drug;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DrugClass";

    public function getDrug()
    {
        return $this->drug;
    }

    public function setDrug($drug)
    {
        $this->drug = $drug;
        return $this;
    }

}
