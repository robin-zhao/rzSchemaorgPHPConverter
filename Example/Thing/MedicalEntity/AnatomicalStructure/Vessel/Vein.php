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
    protected $drainsTo;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $regionDrained;

    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $tributary;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Vein";

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function getDrainsTo()
    {
        return $this->drainsTo;
    }

    /**
     * @param $drainsTo Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function setDrainsTo($drainsTo)
    {
        $this->drainsTo = $drainsTo;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getRegionDrained()
    {
        return $this->regionDrained;
    }

    /**
     * @param $regionDrained Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setRegionDrained($regionDrained)
    {
        $this->regionDrained = $regionDrained;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getTributary()
    {
        return $this->tributary;
    }

    /**
     * @param $tributary Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setTributary($tributary)
    {
        $this->tributary = $tributary;
        return $this;
    }

}
