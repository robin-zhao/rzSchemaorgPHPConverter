<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Vein
 * http://schema.org/Vein
 */
class Vein extends Vessel
{

    /**
     * The vasculature that the vein drains into.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public $drainsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $regionDrained;

    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $tributary;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Vein";

    /**
     * @param $drainsTo Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function addDrainsTo($drainsTo)
    {
        $this->drainsTo []= $drainsTo;
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
     * @param $tributary Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addTributary($tributary)
    {
        $this->tributary []= $tributary;
        return $this;
    }

}
