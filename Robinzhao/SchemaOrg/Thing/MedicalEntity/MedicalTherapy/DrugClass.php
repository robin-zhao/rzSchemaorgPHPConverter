<?php
/**
 * This is an auto generated file.
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
    public $drug;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DrugClass";

    /**
     * @param $drug Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\Drug
     */
    public function addDrug($drug)
    {
        $this->drug []= $drug;
        return $this;
    }


}