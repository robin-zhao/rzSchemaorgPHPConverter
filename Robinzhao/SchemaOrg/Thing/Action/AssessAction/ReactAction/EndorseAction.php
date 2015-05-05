<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
