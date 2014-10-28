<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\AssessAction\ReactAction;

use Example\Thing\Action\AssessAction\ReactAction;

/**
 * Endorse Action
 * http://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction
{

    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    protected $endorsee;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/EndorseAction";

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getEndorsee()
    {
        return $this->endorsee;
    }

    /**
     * @param $endorsee Example\Thing\Organization|Example\Thing\Person
     */
    public function setEndorsee($endorsee)
    {
        $this->endorsee = $endorsee;
        return $this;
    }

}
