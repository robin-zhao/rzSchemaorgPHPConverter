<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\AssessAction\ChooseAction;

use Robinzhao\SchemaOrg\Thing\Action\AssessAction\ChooseAction;

/**
 * Vote Action
 * http://schema.org/VoteAction
 */
class VoteAction extends ChooseAction
{

    /**
     * A sub property of object. The candidate subject of this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $candidate;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/VoteAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param $candidate Robinzhao\SchemaOrg\Thing\Person
     */
    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
        return $this;
    }

}
