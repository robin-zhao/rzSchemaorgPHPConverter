<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Example\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Vein
 * http://schema.org/Vein
 */
class Vein extends Vessel
{

    /**
     * The vasculature that the vein drains into.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    private $drainsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $regionDrained;

    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $tributary;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Vein";

    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    public function setDrainsTo($drainsTo)
    {
        $this->drainsTo = $drainsTo;
        return $this;
    }

    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    public function setRegionDrained($regionDrained)
    {
        $this->regionDrained = $regionDrained;
        return $this;
    }

    public function getTributary()
    {
        return $this->tributary;
    }

    public function setTributary($tributary)
    {
        $this->tributary = $tributary;
        return $this;
    }

}
