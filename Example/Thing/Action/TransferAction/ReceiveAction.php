<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\TransferAction;

use Example\Thing\Action\TransferAction;

/**
 * Receive Action
 * http://schema.org/ReceiveAction
 */
class ReceiveAction extends TransferAction
{

    /**
     * A sub property of instrument. The method of delivery
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    private $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the sending end of the action.
     *
     * @var Example\Thing\Intangible\Audience|Example\Thing\Organization|Example\Thing\Person
     */
    private $sender;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ReceiveAction";

    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    public function getSender()
    {
        return $this->sender;
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

}
