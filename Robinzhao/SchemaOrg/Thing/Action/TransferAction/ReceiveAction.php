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
    public $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $sender;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ReceiveAction";

    /**
     * @param $deliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function addDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod []= $deliveryMethod;
        return $this;
    }

    /**
     * @param $sender Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addSender($sender)
    {
        $this->sender []= $sender;
        return $this;
    }

}
