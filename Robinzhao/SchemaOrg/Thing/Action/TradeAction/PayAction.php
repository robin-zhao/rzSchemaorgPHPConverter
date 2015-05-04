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
    protected $purpose;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $recipient;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PayAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param $purpose Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param $recipient Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

}
