<?php

namespace Example\Thing\Action\FindAction;

use Example\Thing\Action\FindAction;

/**
 * Track Action
 * http://schema.org/TrackAction
 */
class TrackAction extends FindAction
{

    /**
     * A sub property of instrument. The method of delivery
     *
     * @var DeliveryMethod
     */
    private $deliveryMethod;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TrackAction";

    public function getdeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    public function setdeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

}
