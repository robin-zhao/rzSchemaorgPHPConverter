<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\AssessAction\ReactAction;

use Robinzhao\SchemaOrg\Thing\Action\AssessAction\ReactAction;

/**
 * Endorse Action
 * http://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction
{

    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $endorsee;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/EndorseAction";

    /**
     * @param $endorsee Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addEndorsee($endorsee)
    {
        $this->endorsee []= $endorsee;
        return $this;
    }


}