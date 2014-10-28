<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    protected $deliveryMethod;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/TrackAction";

    /**
     * @return Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param $deliveryMethod Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

}
