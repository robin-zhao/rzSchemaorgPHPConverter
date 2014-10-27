<?php

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
     * @var AnatomicalStructure|AnatomicalSystem
     */
    private $relatedAnatomy;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var MedicalCondition
     */
    private $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var MedicalTherapy
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

    public function getassociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    public function setassociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
        return $this;
    }

    public function getrelatedAnatomy()
    {
        return $this->relatedAnatomy;
    }

    public function setrelatedAnatomy($relatedAnatomy)
    {
        $this->relatedAnatomy = $relatedAnatomy;
        return $this;
    }

    public function getrelatedCondition()
    {
        return $this->relatedCondition;
    }

    public function setrelatedCondition($relatedCondition)
    {
        $this->relatedCondition = $relatedCondition;
        return $this;
    }

    public function getrelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    public function setrelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy = $relatedTherapy;
        return $this;
    }

    public function getsignificance()
    {
        return $this->significance;
    }

    public function setsignificance($significance)
    {
        $this->significance = $significance;
        return $this;
    }

}
