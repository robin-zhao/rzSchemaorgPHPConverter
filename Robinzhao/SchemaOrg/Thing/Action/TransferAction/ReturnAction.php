<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TransferAction;

use Robinzhao\SchemaOrg\Thing\Action\TransferAction;

/**
 * Return Action
 * http://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction
{

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public $recipient;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ReturnAction";

    /**
     * @param $recipient Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addRecipient($recipient)
    {
        $this->recipient []= $recipient;
        return $this;
    }


}