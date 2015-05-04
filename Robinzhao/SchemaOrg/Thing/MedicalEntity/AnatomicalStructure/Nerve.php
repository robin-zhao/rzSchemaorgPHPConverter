<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $branch;

    /**
     * The neurological pathway extension that involves muscle control.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    protected $nerveMotor;

    /**
     * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy
     */
    protected $sensoryUnit;

    /**
     * The neurological pathway that originates the neurons.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    protected $sourcedFrom;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Nerve";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param $branch Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function getNerveMotor()
    {
        return $this->nerveMotor;
    }

    /**
     * @param $nerveMotor Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function setNerveMotor($nerveMotor)
    {
        $this->nerveMotor = $nerveMotor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy
     */
    public function getSensoryUnit()
    {
        return $this->sensoryUnit;
    }

    /**
     * @param $sensoryUnit Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy
     */
    public function setSensoryUnit($sensoryUnit)
    {
        $this->sensoryUnit = $sensoryUnit;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public function getSourcedFrom()
    {
        return $this->sourcedFrom;
    }

    /**
     * @param $sourcedFrom Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\BrainStructure
     */
    public function setSourcedFrom($sourcedFrom)
    {
        $this->sourcedFrom = $sourcedFrom;
        return $this;
    }

}
