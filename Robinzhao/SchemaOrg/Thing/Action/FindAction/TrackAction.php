<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\FindAction;

use Robinzhao\SchemaOrg\Thing\Action\FindAction;

/**
 * Track Action
 * http://schema.org/TrackAction
 */
class TrackAction extends FindAction
{

    /**
     * A sub property of instrument. The method of delivery
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public $deliveryMethod;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/TrackAction";

    /**
     * @param $deliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function addDeliveryMethod($deliveryMethod)
    {
        $this->deliveryMethod []= $deliveryMethod;
        return $this;
    }

}
