<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
 * Nerve
 * http://schema.org/Nerve
 */
class Nerve extends AnatomicalStructure
{

    /**
     * The branches that delineate from the nerve bundle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public $branch;

    /**
     * The neurological pathway extension that involves muscle control.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public $nerveMotor;

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy
     */
    public $sensoryUnit;

    /**
     * The neurological pathway that originates the neurons.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public $sourcedFrom;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Nerve";

    /**
     * @param $branch Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function addBranch($branch)
    {
        $this->branch []= $branch;
        return $this;
    }

    /**
     * @param $nerveMotor Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function addNerveMotor($nerveMotor)
    {
        $this->nerveMotor []= $nerveMotor;
        return $this;
    }

    /**
     * @param $sensoryUnit Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy
     */
    public function addSensoryUnit($sensoryUnit)
    {
        $this->sensoryUnit []= $sensoryUnit;
        return $this;
    }

    /**
     * @param $sourcedFrom Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public function addSourcedFrom($sourcedFrom)
    {
        $this->sourcedFrom []= $sourcedFrom;
        return $this;
    }


}