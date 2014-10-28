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
    protected $candidate;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/VoteAction";

    /**
     * @return Example\Thing\Person
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param $candidate Example\Thing\Person
     */
    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
        return $this;
    }

}
