<?php

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

    public function getdeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    public function setdeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    public function getsender()
    {
        return $this->sender;
    }

    public function setsender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

}
