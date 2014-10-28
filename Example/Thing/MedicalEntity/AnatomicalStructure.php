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
    protected $associatedPathophysiology;

    /**
     * Location in the body of the anatomical structure.
     *
     * @var String
     */
    protected $bodyLocation;

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $connectedTo;

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    protected $diagram;

    /**
     * Function of the anatomical structure.
     *
     * @var String
     */
    protected $function;

    /**
     * The anatomical or organ system that this structure is part of.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem
     */
    protected $partOfSystem;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var Example\Thing\MedicalEntity\MedicalCondition
     */
    protected $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var Example\Thing\MedicalEntity\MedicalTherapy
     */
    protected $relatedTherapy;

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $subStructure;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/AnatomicalStructure";

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
     * @return String
     */
    public function getBodyLocation()
    {
        return $this->bodyLocation;
    }

    /**
     * @param $bodyLocation String
     */
    public function setBodyLocation($bodyLocation)
    {
        $this->bodyLocation = $bodyLocation;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getConnectedTo()
    {
        return $this->connectedTo;
    }

    /**
     * @param $connectedTo Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setConnectedTo($connectedTo)
    {
        $this->connectedTo = $connectedTo;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getDiagram()
    {
        return $this->diagram;
    }

    /**
     * @param $diagram Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setDiagram($diagram)
    {
        $this->diagram = $diagram;
        return $this;
    }

    /**
     * @return String
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * @param $function String
     */
    public function setFunction($function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalSystem
     */
    public function getPartOfSystem()
    {
        return $this->partOfSystem;
    }

    /**
     * @param $partOfSystem Example\Thing\MedicalEntity\AnatomicalSystem
     */
    public function setPartOfSystem($partOfSystem)
    {
        $this->partOfSystem = $partOfSystem;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalCondition
     */
    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    /**
     * @param $relatedCondition Example\Thing\MedicalEntity\MedicalCondition
     */
    public function setRelatedCondition($relatedCondition)
    {
        $this->relatedCondition = $relatedCondition;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    /**
     * @param $relatedTherapy Example\Thing\MedicalEntity\MedicalTherapy
     */
    public function setRelatedTherapy($relatedTherapy)
    {
        $this->relatedTherapy = $relatedTherapy;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getSubStructure()
    {
        return $this->subStructure;
    }

    /**
     * @param $subStructure Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setSubStructure($subStructure)
    {
        $this->subStructure = $subStructure;
        return $this;
    }

}
