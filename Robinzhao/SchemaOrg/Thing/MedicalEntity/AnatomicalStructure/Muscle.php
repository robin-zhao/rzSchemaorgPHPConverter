<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
 * Muscle
 * http://schema.org/Muscle
 */
class Muscle extends AnatomicalStructure
{

    /**
     * The movement the muscle generates.
     *
     * @var String
     */
    protected $action;

    /**
     * The muscle whose action counteracts the specified muscle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    protected $antagonist;

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    protected $bloodSupply;

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $insertion;

    /**
     * The underlying innervation associated with the muscle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    protected $nerve;

    /**
     * The place or point where a muscle arises.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $origin;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Muscle";

    /**
     * @return String
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param $action String
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function getAntagonist()
    {
        return $this->antagonist;
    }

    /**
     * @param $antagonist Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function setAntagonist($antagonist)
    {
        $this->antagonist = $antagonist;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function getBloodSupply()
    {
        return $this->bloodSupply;
    }

    /**
     * @param $bloodSupply Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function setBloodSupply($bloodSupply)
    {
        $this->bloodSupply = $bloodSupply;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getInsertion()
    {
        return $this->insertion;
    }

    /**
     * @param $insertion Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setInsertion($insertion)
    {
        $this->insertion = $insertion;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function getNerve()
    {
        return $this->nerve;
    }

    /**
     * @param $nerve Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function setNerve($nerve)
    {
        $this->nerve = $nerve;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param $origin Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

}
