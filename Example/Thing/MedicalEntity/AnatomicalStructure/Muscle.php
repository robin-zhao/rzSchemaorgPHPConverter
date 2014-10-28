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

    public function getaction()
    {
        return $this->action;
    }

    public function setaction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function getantagonist()
    {
        return $this->antagonist;
    }

    public function setantagonist($antagonist)
    {
        $this->antagonist = $antagonist;
        return $this;
    }

    public function getbloodSupply()
    {
        return $this->bloodSupply;
    }

    public function setbloodSupply($bloodSupply)
    {
        $this->bloodSupply = $bloodSupply;
        return $this;
    }

    public function getinsertion()
    {
        return $this->insertion;
    }

    public function setinsertion($insertion)
    {
        $this->insertion = $insertion;
        return $this;
    }

    public function getnerve()
    {
        return $this->nerve;
    }

    public function setnerve($nerve)
    {
        $this->nerve = $nerve;
        return $this;
    }

    public function getorigin()
    {
        return $this->origin;
    }

    public function setorigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

}
