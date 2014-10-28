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
    protected $codeValue;

    /**
     * The coding system, e.g. 'ICD-10'.
     *
     * @var String
     */
    protected $codingSystem;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalCode";

    /**
     * @return String
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * @param $codeValue String
     */
    public function setCodeValue($codeValue)
    {
        $this->codeValue = $codeValue;
        return $this;
    }

    /**
     * @return String
     */
    public function getCodingSystem()
    {
        return $this->codingSystem;
    }

    /**
     * @param $codingSystem String
     */
    public function setCodingSystem($codingSystem)
    {
        $this->codingSystem = $codingSystem;
        return $this;
    }

}
