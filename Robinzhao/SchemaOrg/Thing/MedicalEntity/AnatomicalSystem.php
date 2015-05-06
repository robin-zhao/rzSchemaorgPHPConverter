<?php
/**
 * This is an auto generated file.
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
    public $associatedPathophysiology;

    /**
     * The underlying anatomical structures, such as organs, that comprise the anatomical system.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public $comprisedOf;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public $relatedCondition;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $relatedStructure;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $relatedTherapy;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AnatomicalSystem";

    /**
     * @param $associatedPathophysiology String
     */
    public function addAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology []= $associatedPathophysiology;
        return $this;
    }

    /**
     * @param $comprisedOf Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public function addComprisedOf($comprisedOf)
    {
        $this->comprisedOf []= $comprisedOf;
        return $this;
    }

    /**
     * @param $relatedCondition Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public function addRelatedCondition($relatedCondition)
    {
        $this->relatedCondition []= $relatedCondition;
        return $this;
    }

    /**
     * @param $relatedStructure Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addRelatedStructure($relatedStructure)
    {
        $this->relatedStructure []= $relatedStructure;
        return $this;
    }

    /**
     * @param $relatedTherapy Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addRelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy []= $relatedTherapy;
        return $this;
    }


}