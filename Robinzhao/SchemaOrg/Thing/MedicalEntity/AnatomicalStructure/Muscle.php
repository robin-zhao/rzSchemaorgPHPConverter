<?php
/**
 * This is an auto generated file.
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
    public $action;

    /**
     * The muscle whose action counteracts the specified muscle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public $antagonist;

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public $bloodSupply;

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $insertion;

    /**
     * The underlying innervation associated with the muscle.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public $nerve;

    /**
     * The place or point where a muscle arises.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public $origin;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Muscle";

    /**
     * @param $action String
     */
    public function addAction($action)
    {
        $this->action []= $action;
        return $this;
    }

    /**
     * @param $antagonist Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function addAntagonist($antagonist)
    {
        $this->antagonist []= $antagonist;
        return $this;
    }

    /**
     * @param $bloodSupply Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function addBloodSupply($bloodSupply)
    {
        $this->bloodSupply []= $bloodSupply;
        return $this;
    }

    /**
     * @param $insertion Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addInsertion($insertion)
    {
        $this->insertion []= $insertion;
        return $this;
    }

    /**
     * @param $nerve Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function addNerve($nerve)
    {
        $this->nerve []= $nerve;
        return $this;
    }

    /**
     * @param $origin Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addOrigin($origin)
    {
        $this->origin []= $origin;
        return $this;
    }


}