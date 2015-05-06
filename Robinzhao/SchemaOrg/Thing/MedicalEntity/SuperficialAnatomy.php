<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

/**
 * Superficial Anatomy
 * http://schema.org/SuperficialAnatomy
 */
class SuperficialAnatomy extends MedicalEntity
{

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     * @var String
     */
    public $associatedPathophysiology;

    /**
     * Anatomical systems or structures that relate to the superficial anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public $relatedAnatomy;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    public $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public $relatedTherapy;

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
     *
     * @var String
     */
    public $significance;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/SuperficialAnatomy";

    /**
     * @param $associatedPathophysiology String
     */
    public function addAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology []= $associatedPathophysiology;
        return $this;
    }

    /**
     * @param $relatedAnatomy Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public function addRelatedAnatomy($relatedAnatomy)
    {
        $this->relatedAnatomy []= $relatedAnatomy;
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
     * @param $relatedTherapy Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    public function addRelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy []= $relatedTherapy;
        return $this;
    }

    /**
     * @param $significance String
     */
    public function addSignificance($significance)
    {
        $this->significance []= $significance;
        return $this;
    }


}