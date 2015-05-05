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
    public $candidate;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/VoteAction";

    /**
     * @param $candidate Robinzhao\SchemaOrg\Thing\Person
     */
    public function addCandidate($candidate)
    {
        $this->candidate []= $candidate;
        return $this;
    }

}
