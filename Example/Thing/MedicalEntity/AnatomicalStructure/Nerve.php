<?php

namespace Example\Thing\MedicalEntity\AnatomicalStructure;

use Example\Thing\MedicalEntity\AnatomicalStructure;

/**
 * Nerve
 * http://schema.org/Nerve
 */
class Nerve extends AnatomicalStructure
{

    /**
     * The branches that delineate from the nerve bundle.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    private $branch;

    /**
     * The neurological pathway extension that involves muscle control.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    private $nerveMotor;

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\SuperficialAnatomy
     */
    private $sensoryUnit;

    /**
     * The neurological pathway that originates the neurons.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    private $sourcedFrom;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Nerve";

    public function getbranch()
    {
        return $this->branch;
    }

    public function setbranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    public function getnerveMotor()
    {
        return $this->nerveMotor;
    }

    public function setnerveMotor($nerveMotor)
    {
        $this->nerveMotor = $nerveMotor;
        return $this;
    }

    public function getsensoryUnit()
    {
        return $this->sensoryUnit;
    }

    public function setsensoryUnit($sensoryUnit)
    {
        $this->sensoryUnit = $sensoryUnit;
        return $this;
    }

    public function getsourcedFrom()
    {
        return $this->sourcedFrom;
    }

    public function setsourcedFrom($sourcedFrom)
    {
        $this->sourcedFrom = $sourcedFrom;
        return $this;
    }

}
