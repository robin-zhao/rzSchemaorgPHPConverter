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

    public function getOriginatesFrom()
    {
        return $this->originatesFrom;
    }

    public function setOriginatesFrom($originatesFrom)
    {
        $this->originatesFrom = $originatesFrom;
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

    public function getRunsTo()
    {
        return $this->runsTo;
    }

    public function setRunsTo($runsTo)
    {
        $this->runsTo = $runsTo;
        return $this;
    }

}
