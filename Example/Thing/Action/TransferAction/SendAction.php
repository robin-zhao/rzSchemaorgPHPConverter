<?php

namespace Example\Thing\Action\TransferAction;

use Example\Thing\Action\TransferAction;

/**
 * Send Action
 * http://schema.org/SendAction
 */
class SendAction extends TransferAction
{

    /**
     * A sub property of instrument. The method of delivery
     *
     * @var DeliveryMethod
     */
    private $deliveryMethod;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Organization|Audience|Person
     */
    private $recipient;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/SendAction";

    public function getdeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    public function setdeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    public function getrecipient()
    {
        return $this->recipient;
    }

    public function setrecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

}
