<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    private $originatesFrom;

    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $regionDrained;

    /**
     * The vasculature the lymphatic structure runs, or efferents, to.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
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
