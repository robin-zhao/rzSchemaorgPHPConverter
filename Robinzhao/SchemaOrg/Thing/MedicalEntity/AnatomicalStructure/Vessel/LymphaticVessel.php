<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $originatesFrom;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $regionDrained;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    protected $runsTo;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/LymphaticVessel";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function getOriginatesFrom()
    {
        return $this->originatesFrom;
    }

    /**
     * @param $originatesFrom Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function setOriginatesFrom($originatesFrom)
    {
        $this->originatesFrom = $originatesFrom;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    /**
     * @param $regionDrained Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setRegionDrained($regionDrained)
    {
        $this->regionDrained = $regionDrained;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function getRunsTo()
    {
        return $this->runsTo;
    }

    /**
     * @param $runsTo Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function setRunsTo($runsTo)
    {
        $this->runsTo = $runsTo;
        return $this;
    }

}
