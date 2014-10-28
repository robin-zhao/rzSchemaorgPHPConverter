<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\AnatomicalStructure;

use Example\Thing\MedicalEntity\AnatomicalStructure;

/**
 * Joint
 * http://schema.org/Joint
 */
class Joint extends AnatomicalStructure
{

    /**
     * The biomechanical properties of the bone.
     *
     * @var String
     */
    private $biomechnicalClass;

    /**
     * The degree of mobility the joint allows.
     *
     * @var String
     */
    private $functionalClass;

    /**
     * The name given to how bone physically connects to each other.
     *
     * @var String
     */
    private $structuralClass;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Joint";

    public function getbiomechnicalClass()
    {
        return $this->biomechnicalClass;
    }

    public function setbiomechnicalClass($biomechnicalClass)
    {
        $this->biomechnicalClass = $biomechnicalClass;
        return $this;
    }

    public function getfunctionalClass()
    {
        return $this->functionalClass;
    }

    public function setfunctionalClass($functionalClass)
    {
        $this->functionalClass = $functionalClass;
        return $this;
    }

    public function getstructuralClass()
    {
        return $this->structuralClass;
    }

    public function setstructuralClass($structuralClass)
    {
        $this->structuralClass = $structuralClass;
        return $this;
    }

}
