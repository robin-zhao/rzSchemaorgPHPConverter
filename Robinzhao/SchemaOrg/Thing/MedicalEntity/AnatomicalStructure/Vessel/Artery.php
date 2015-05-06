<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * Artery
 * http://schema.org/Artery
 */
class Artery extends Vessel
{

    /**
     * The branches that comprise the arterial structure.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $arterialBranch;

    /**
     * The anatomical or organ system that the artery originates from.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $source;

    /**
     * The area to which the artery supplies blood to.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $supplyTo;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Artery";

    /**
     * @param $arterialBranch Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addArterialBranch($arterialBranch)
    {
        $this->arterialBranch []= $arterialBranch;
        return $this;
    }

    /**
     * @param $source Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addSource($source)
    {
        $this->source []= $source;
        return $this;
    }

    /**
     * @param $supplyTo Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addSupplyTo($supplyTo)
    {
        $this->supplyTo []= $supplyTo;
        return $this;
    }


}