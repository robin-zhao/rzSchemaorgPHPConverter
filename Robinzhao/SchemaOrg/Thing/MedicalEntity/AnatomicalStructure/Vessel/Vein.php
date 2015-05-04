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
    protected $drainsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $regionDrained;

    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $tributary;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Vein";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    /**
     * @param $drainsTo Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function setDrainsTo($drainsTo)
    {
        $this->drainsTo = $drainsTo;
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
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getTributary()
    {
        return $this->tributary;
    }

    /**
     * @param $tributary Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setTributary($tributary)
    {
        $this->tributary = $tributary;
        return $this;
    }

}
