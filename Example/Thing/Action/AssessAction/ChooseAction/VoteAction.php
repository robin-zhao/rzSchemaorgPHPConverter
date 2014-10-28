<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\AssessAction\ChooseAction;

use Example\Thing\Action\AssessAction\ChooseAction;

/**
 * Vote Action
 * http://schema.org/VoteAction
 */
class VoteAction extends ChooseAction
{

    /**
     * A sub property of object. The candidate subject of this action.
     *
     * @var Example\Thing\Person
     */
    private $candidate;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/VoteAction";

    public function getcandidate()
    {
        return $this->candidate;
    }

    public function setcandidate($candidate)
    {
        $this->candidate = $candidate;
        return $this;
    }

}
