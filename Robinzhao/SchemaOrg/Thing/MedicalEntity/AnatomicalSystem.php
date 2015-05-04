<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Anatomical System
 * http://schema.org/AnatomicalSystem
 */
class AnatomicalSystem extends MedicalEntity
{

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     * @var String
     */
    protected $associatedPathophysiology;

    /**
     * The underlying anatomical structures, such as organs, that comprise the anatomical system.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    protected $comprisedOf;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    protected $relatedCondition;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $relatedStructure;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    protected $relatedTherapy;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/AnatomicalSystem";

    /**
     * @return String
     */
    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    /**
     * @param $associatedPathophysiology String
     */
    public function setAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public function getComprisedOf()
    {
        return $this->comprisedOf;
    }

    /**
     * @param $comprisedOf Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public function setComprisedOf($comprisedOf)
    {
        $this->comprisedOf = $comprisedOf;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    /**
     * @param $relatedCondition Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function setRelatedCondition($relatedCondition)
    {
        $this->relatedCondition = $relatedCondition;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getRelatedStructure()
    {
        return $this->relatedStructure;
    }

    /**
     * @param $relatedStructure Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setRelatedStructure($relatedStructure)
    {
        $this->relatedStructure = $relatedStructure;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    /**
     * @param $relatedTherapy Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function setRelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy = $relatedTherapy;
        return $this;
    }

}
