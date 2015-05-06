<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Lymphatic Vessel
 * http://schema.org/LymphaticVessel
 */
class LymphaticVessel extends Vessel
{

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public $originatesFrom;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $regionDrained;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public $runsTo;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/LymphaticVessel";

    /**
     * @param $originatesFrom Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function addOriginatesFrom($originatesFrom)
    {
        $this->originatesFrom []= $originatesFrom;
        return $this;
    }

    /**
     * @param $regionDrained Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addRegionDrained($regionDrained)
    {
        $this->regionDrained []= $regionDrained;
        return $this;
    }

    /**
     * @param $runsTo Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function addRunsTo($runsTo)
    {
        $this->runsTo []= $runsTo;
        return $this;
    }


}