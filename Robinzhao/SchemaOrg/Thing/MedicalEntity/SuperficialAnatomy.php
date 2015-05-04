<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $associatedPathophysiology;

    /**
     * Anatomical systems or structures that relate to the superficial anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    protected $relatedAnatomy;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalCondition
     */
    protected $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy
     */
    protected $relatedTherapy;

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
     *
     * @var String
     */
    protected $significance;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/SuperficialAnatomy";

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
    public function getRelatedAnatomy()
    {
        return $this->relatedAnatomy;
    }

    /**
     * @param $relatedAnatomy Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public function setRelatedAnatomy($relatedAnatomy)
    {
        $this->relatedAnatomy = $relatedAnatomy;
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

    /**
     * @return String
     */
    public function getSignificance()
    {
        return $this->significance;
    }

    /**
     * @param $significance String
     */
    public function setSignificance($significance)
    {
        $this->significance = $significance;
        return $this;
    }

}
