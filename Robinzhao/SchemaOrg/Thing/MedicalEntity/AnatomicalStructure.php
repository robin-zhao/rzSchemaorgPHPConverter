<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity;

use Robinzhao\SchemaOrg\Thing\MedicalEntity;

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
    public $associatedPathophysiology;

    /**
     * Location in the body of the anatomical structure.
     *
     * @var String
     */
    public $bodyLocation;

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $connectedTo;

    /**
     * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $diagram;

    /**
     * Function of the anatomical structure.
     *
     * @var String
     */
    public $function;

    /**
     * The anatomical or organ system that this structure is part of.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public $partOfSystem;

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
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $subStructure;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AnatomicalStructure";

    /**
     * @param $associatedPathophysiology String
     */
    public function addAssociatedPathophysiology($associatedPathophysiology)
    {
        $this->associatedPathophysiology []= $associatedPathophysiology;
        return $this;
    }

    /**
     * @param $bodyLocation String
     */
    public function addBodyLocation($bodyLocation)
    {
        $this->bodyLocation []= $bodyLocation;
        return $this;
    }

    /**
     * @param $connectedTo Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addConnectedTo($connectedTo)
    {
        $this->connectedTo []= $connectedTo;
        return $this;
    }

    /**
     * @param $diagram Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addDiagram($diagram)
    {
        $this->diagram []= $diagram;
        return $this;
    }

    /**
     * @param $function String
     */
    public function addFunction($function)
    {
        $this->function []= $function;
        return $this;
    }

    /**
     * @param $partOfSystem Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem
     */
    public function addPartOfSystem($partOfSystem)
    {
        $this->partOfSystem []= $partOfSystem;
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
     * @param $subStructure Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addSubStructure($subStructure)
    {
        $this->subStructure []= $subStructure;
        return $this;
    }

}
