<?php

namespace Example\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Example\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Artery
 * http://schema.org/Artery
 */
class Artery extends Vessel
{

    /**
     * The branches that comprise the arterial structure.
     *
     * @var AnatomicalStructure
     */
    private $arterialBranch;

    /**
     * The anatomical or organ system that the artery originates from.
     *
     * @var AnatomicalStructure
     */
    private $source;

    /**
     * The area to which the artery supplies blood to.
     *
     * @var AnatomicalStructure
     */
    private $supplyTo;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Artery";

    public function getarterialBranch()
    {
        return $this->arterialBranch;
    }

    public function setarterialBranch($arterialBranch)
    {
        $this->arterialBranch = $arterialBranch;
        return $this;
    }

    public function getsource()
    {
        return $this->source;
    }

    public function setsource($source)
    {
        $this->source = $source;
        return $this;
    }

    public function getsupplyTo()
    {
        return $this->supplyTo;
    }

    public function setsupplyTo($supplyTo)
    {
        $this->supplyTo = $supplyTo;
        return $this;
    }

}
