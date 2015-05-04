<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TransferAction;

use Robinzhao\SchemaOrg\Thing\Action\TransferAction;

/**
 * Send Action
 * http://schema.org/SendAction
 */
class SendAction extends TransferAction
{

    /**
     * A sub property of instrument. The method of delivery
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    protected $deliveryMethod;

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
    protected $context = "http://schema.org/SendAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param $deliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
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
