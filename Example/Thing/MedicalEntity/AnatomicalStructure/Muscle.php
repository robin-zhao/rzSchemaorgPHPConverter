<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\AnatomicalStructure;

use Example\Thing\MedicalEntity\AnatomicalStructure;

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
    private $action;

    /**
     * The muscle whose action counteracts the specified muscle.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    private $antagonist;

    /**
     * The blood vessel that carries blood from the heart to the muscle.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    private $bloodSupply;

    /**
     * The place of attachment of a muscle, or what the muscle moves.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $insertion;

    /**
     * The underlying innervation associated with the muscle.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    private $nerve;

    /**
     * The place or point where a muscle arises.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $origin;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Muscle";

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
     * @return Example\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function getAntagonist()
    {
        return $this->antagonist;
    }

    /**
     * @param $antagonist Example\Thing\MedicalEntity\AnatomicalStructure\Muscle
     */
    public function setAntagonist($antagonist)
    {
        $this->antagonist = $antagonist;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function getBloodSupply()
    {
        return $this->bloodSupply;
    }

    /**
     * @param $bloodSupply Example\Thing\MedicalEntity\AnatomicalStructure\Vessel
     */
    public function setBloodSupply($bloodSupply)
    {
        $this->bloodSupply = $bloodSupply;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getInsertion()
    {
        return $this->insertion;
    }

    /**
     * @param $insertion Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setInsertion($insertion)
    {
        $this->insertion = $insertion;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function getNerve()
    {
        return $this->nerve;
    }

    /**
     * @param $nerve Example\Thing\MedicalEntity\AnatomicalStructure\Nerve
     */
    public function setNerve($nerve)
    {
        $this->nerve = $nerve;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param $origin Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

}
