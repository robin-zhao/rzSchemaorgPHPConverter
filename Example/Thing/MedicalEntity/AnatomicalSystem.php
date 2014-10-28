<?php

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

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
    private $associatedPathophysiology;

    /**
     * The underlying anatomical structures, such as organs, that comprise the anatomical system.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\AnatomicalSystem
     */
    private $comprisedOf;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Example\Thing\MedicalEntity\MedicalCondition
     */
    private $relatedCondition;

    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $relatedStructure;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    private $relatedTherapy;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AnatomicalSystem";

    public function getassociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    public function setassociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
        return $this;
    }

    public function getcomprisedOf()
    {
        return $this->comprisedOf;
    }

    public function setcomprisedOf($comprisedOf)
    {
        $this->comprisedOf = $comprisedOf;
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

    public function getrelatedStructure()
    {
        return $this->relatedStructure;
    }

    public function setrelatedStructure($relatedStructure)
    {
        $this->relatedStructure = $relatedStructure;
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

}
