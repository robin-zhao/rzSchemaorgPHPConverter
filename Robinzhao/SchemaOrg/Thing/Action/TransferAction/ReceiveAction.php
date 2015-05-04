<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TransferAction;

use Robinzhao\SchemaOrg\Thing\Action\TransferAction;

/**
 * Receive Action
 * http://schema.org/ReceiveAction
 */
class ReceiveAction extends TransferAction
{

    /**
     * A sub property of instrument. The method of delivery
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    protected $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $sender;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ReceiveAction";

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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param $sender Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

}
