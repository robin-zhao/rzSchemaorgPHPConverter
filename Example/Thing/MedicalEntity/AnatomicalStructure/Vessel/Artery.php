<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $arterialBranch;

    /**
     * The anatomical or organ system that the artery originates from.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $source;

    /**
     * The area to which the artery supplies blood to.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $supplyTo;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Artery";

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getArterialBranch()
    {
        return $this->arterialBranch;
    }

    /**
     * @param $arterialBranch Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setArterialBranch($arterialBranch)
    {
        $this->arterialBranch = $arterialBranch;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param $source Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getSupplyTo()
    {
        return $this->supplyTo;
    }

    /**
     * @param $supplyTo Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setSupplyTo($supplyTo)
    {
        $this->supplyTo = $supplyTo;
        return $this;
    }

}
