<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TradeAction;

use Robinzhao\SchemaOrg\Thing\Action\TradeAction;

/**
 * Tip Action
 * http://schema.org/TipAction
 */
class TipAction extends TradeAction
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
    public $context = "http://schema.org/TipAction";

    /**
     * @param $recipient Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addRecipient($recipient)
    {
        $this->recipient []= $recipient;
        return $this;
    }


}