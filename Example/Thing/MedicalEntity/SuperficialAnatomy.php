<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

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
    private $associatedPathophysiology;

    /**
     * Anatomical systems or structures that relate to the superficial anatomy.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\AnatomicalSystem
     */
    private $relatedAnatomy;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Example\Thing\MedicalEntity\MedicalCondition
     */
    private $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $relatedTherapy;

    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
     *
     * @var String
     */
    private $significance;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/SuperficialAnatomy";

    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    public function setAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
        return $this;
    }

    public function getRelatedAnatomy()
    {
        return $this->relatedAnatomy;
    }

    public function setRelatedAnatomy($relatedAnatomy)
    {
        $this->relatedAnatomy = $relatedAnatomy;
        return $this;
    }

    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    public function setRelatedCondition($relatedCondition)
    {
        $this->relatedCondition = $relatedCondition;
        return $this;
    }

    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    public function setRelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy = $relatedTherapy;
        return $this;
    }

    public function getSignificance()
    {
        return $this->significance;
    }

    public function setSignificance($significance)
    {
        $this->significance = $significance;
        return $this;
    }

}
