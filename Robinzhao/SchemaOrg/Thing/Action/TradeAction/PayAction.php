<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TradeAction;

use Robinzhao\SchemaOrg\Thing\Action\TradeAction;

/**
 * Pay Action
 * http://schema.org/PayAction
 */
class PayAction extends TradeAction
{

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public $purpose;

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
    public $context = "http://schema.org/PayAction";

    /**
     * @param $purpose Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function addPurpose($purpose)
    {
        $this->purpose []= $purpose;
        return $this;
    }

    /**
     * @param $recipient Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addRecipient($recipient)
    {
        $this->recipient []= $recipient;
        return $this;
    }

}
