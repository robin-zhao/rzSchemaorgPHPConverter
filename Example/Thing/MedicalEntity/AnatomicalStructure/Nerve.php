<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param $branch Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function getNerveMotor()
    {
        return $this->nerveMotor;
    }

    /**
     * @param $nerveMotor Example\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function setNerveMotor($nerveMotor)
    {
        $this->nerveMotor = $nerveMotor;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\SuperficialAnatomy
     */
    public function getSensoryUnit()
    {
        return $this->sensoryUnit;
    }

    /**
     * @param $sensoryUnit Example\Thing\MedicalEntity\AnatomicalStructure|Example\Thing\MedicalEntity\SuperficialAnatomy
     */
    public function setSensoryUnit($sensoryUnit)
    {
        $this->sensoryUnit = $sensoryUnit;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public function getSourcedFrom()
    {
        return $this->sourcedFrom;
    }

    /**
     * @param $sourcedFrom Example\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public function setSourcedFrom($sourcedFrom)
    {
        $this->sourcedFrom = $sourcedFrom;
        return $this;
    }

}
