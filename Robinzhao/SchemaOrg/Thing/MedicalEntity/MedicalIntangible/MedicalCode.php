<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
 * Medical Code
 * http://schema.org/MedicalCode
 */
class MedicalCode extends MedicalIntangible
{

    /**
     * The actual code.
     *
     * @var String
     */
    public $codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     *
     * @var String
     */
    public $codingSystem;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalCode";

    /**
     * @param $codeValue String
     */
    public function addCodeValue($codeValue)
    {
        $this->codeValue []= $codeValue;
        return $this;
    }

    /**
     * @param $codingSystem String
     */
    public function addCodingSystem($codingSystem)
    {
        $this->codingSystem []= $codingSystem;
        return $this;
    }

}
