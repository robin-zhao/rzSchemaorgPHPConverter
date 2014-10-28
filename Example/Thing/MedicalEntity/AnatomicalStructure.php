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

    public function getassociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    public function setassociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology = $associatedPathophysiology;
        return $this;
    }

    public function getbodyLocation()
    {
        return $this->bodyLocation;
    }

    public function setbodyLocation($bodyLocation)
    {
        $this->bodyLocation = $bodyLocation;
        return $this;
    }

    public function getconnectedTo()
    {
        return $this->connectedTo;
    }

    public function setconnectedTo($connectedTo)
    {
        $this->connectedTo = $connectedTo;
        return $this;
    }

    public function getdiagram()
    {
        return $this->diagram;
    }

    public function setdiagram($diagram)
    {
        $this->diagram = $diagram;
        return $this;
    }

    public function getfunction()
    {
        return $this->function;
    }

    public function setfunction($function)
    {
        $this->function = $function;
        return $this;
    }

    public function getpartOfSystem()
    {
        return $this->partOfSystem;
    }

    public function setpartOfSystem($partOfSystem)
    {
        $this->partOfSystem = $partOfSystem;
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

    public function getsubStructure()
    {
        return $this->subStructure;
    }

    public function setsubStructure($subStructure)
    {
        $this->subStructure = $subStructure;
        return $this;
    }

}
