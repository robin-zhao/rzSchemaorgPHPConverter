<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy;

/**
 * Drug Class
 * http://schema.org/DrugClass
 */
class DrugClass extends MedicalTherapy
{

    /**
     * A drug in this drug class.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    protected $drug;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DrugClass";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * @param $drug Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function setDrug($drug)
    {
        $this->drug = $drug;
        return $this;
    }

}
