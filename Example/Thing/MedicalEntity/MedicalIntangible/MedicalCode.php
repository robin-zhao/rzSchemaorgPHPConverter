<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

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
    private $codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     *
     * @var String
     */
    private $codingSystem;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalCode";

    public function getcodeValue()
    {
        return $this->codeValue;
    }

    public function setcodeValue($codeValue)
    {
        $this->codeValue = $codeValue;
        return $this;
    }

    public function getcodingSystem()
    {
        return $this->codingSystem;
    }

    public function setcodingSystem($codingSystem)
    {
        $this->codingSystem = $codingSystem;
        return $this;
    }

}
