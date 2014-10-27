<?php

namespace Example\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Example\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Lymphatic Vessel
 * http://schema.org/LymphaticVessel
 */
class LymphaticVessel extends Vessel
{

    /**
     * The vasculature the lymphatic structure originates, or afferents, from.
     *
     * @var Vessel
     */
    private $originatesFrom;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var AnatomicalSystem|AnatomicalStructure
     */
    private $regionDrained;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     * @var Vessel
     */
    private $runsTo;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/LymphaticVessel";

    public function getoriginatesFrom()
    {
        return $this->originatesFrom;
    }

    public function setoriginatesFrom($originatesFrom)
    {
        $this->originatesFrom = $originatesFrom;
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

    public function getrunsTo()
    {
        return $this->runsTo;
    }

    public function setrunsTo($runsTo)
    {
        $this->runsTo = $runsTo;
        return $this;
    }

}
