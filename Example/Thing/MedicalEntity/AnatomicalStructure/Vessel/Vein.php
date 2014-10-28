<?php

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

    public function getdrainsTo()
    {
        return $this->drainsTo;
    }

    public function setdrainsTo($drainsTo)
    {
        $this->drainsTo = $drainsTo;
        return $this;
    }

    public function getregionDrained()
    {
        return $this->regionDrained;
    }

    public function setregionDrained($regionDrained)
    {
        $this->regionDrained = $regionDrained;
        return $this;
    }

    public function gettributary()
    {
        return $this->tributary;
    }

    public function settributary($tributary)
    {
        $this->tributary = $tributary;
        return $this;
    }

}
