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
    private $endorsee;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/EndorseAction";

    public function getendorsee()
    {
        return $this->endorsee;
    }

    public function setendorsee($endorsee)
    {
        $this->endorsee = $endorsee;
        return $this;
    }

}
