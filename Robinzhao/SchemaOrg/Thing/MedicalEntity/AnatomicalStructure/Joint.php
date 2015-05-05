<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

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
    public $biomechnicalClass;

    /**
     * The degree of mobility the joint allows.
     *
     * @var String
     */
    public $functionalClass;

    /**
     * The name given to how bone physically connects to each other.
     *
     * @var String
     */
    public $structuralClass;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Joint";

    /**
     * @param $biomechnicalClass String
     */
    public function addBiomechnicalClass($biomechnicalClass)
    {
        $this->biomechnicalClass []= $biomechnicalClass;
        return $this;
    }

    /**
     * @param $functionalClass String
     */
    public function addFunctionalClass($functionalClass)
    {
        $this->functionalClass []= $functionalClass;
        return $this;
    }

    /**
     * @param $structuralClass String
     */
    public function addStructuralClass($structuralClass)
    {
        $this->structuralClass []= $structuralClass;
        return $this;
    }

}
