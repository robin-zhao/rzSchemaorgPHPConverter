<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity;

use Example\Thing\MedicalEntity;

/**
 * Anatomical Structure
 * http://schema.org/AnatomicalStructure
 */
class AnatomicalStructure extends MedicalEntity
{

    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     *
     * @var String
     */
    private $associatedPathophysiology;

    /**
     * Location in the body of the anatomical structure.
     *
     * @var String
     */
    private $bodyLocation;

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $connectedTo;

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $diagram;

    /**
     * Function of the anatomical structure.
     *
     * @var String
     */
    private $function;

    /**
     * The anatomical or organ system that this structure is part of.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem
     */
    private $partOfSystem;

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
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $subStructure;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AnatomicalStructure";

    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    public function setAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
        return $this;
    }

    public function getBodyLocation()
    {
        return $this->bodyLocation;
    }

    public function setBodyLocation($bodyLocation)
    {
        $this->bodyLocation = $bodyLocation;
        return $this;
    }

    public function getConnectedTo()
    {
        return $this->connectedTo;
    }

    public function setConnectedTo($connectedTo)
    {
        $this->connectedTo = $connectedTo;
        return $this;
    }

    public function getDiagram()
    {
        return $this->diagram;
    }

    public function setDiagram($diagram)
    {
        $this->diagram = $diagram;
        return $this;
    }

    public function getFunction()
    {
        return $this->function;
    }

    public function setFunction($function)
    {
        $this->function = $function;
        return $this;
    }

    public function getPartOfSystem()
    {
        return $this->partOfSystem;
    }

    public function setPartOfSystem($partOfSystem)
    {
        $this->partOfSystem = $partOfSystem;
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

    public function getSubStructure()
    {
        return $this->subStructure;
    }

    public function setSubStructure($subStructure)
    {
        $this->subStructure = $subStructure;
        return $this;
    }

}
