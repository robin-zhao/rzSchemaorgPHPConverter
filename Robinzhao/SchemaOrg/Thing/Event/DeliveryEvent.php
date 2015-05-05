<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Event;

use Robinzhao\SchemaOrg\Thing\Event;

/**
 * Delivery Event
 * http://schema.org/DeliveryEvent
 */
class DeliveryEvent extends Event
{

    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     * @var String
     */
    public $accessCode;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @var DateTime
     */
    public $availableFrom;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @var DateTime
     */
    public $availableThrough;

    /**
     * Method used for delivery or shipping.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public $hasDeliveryMethod;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DeliveryEvent";

    /**
     * @param $accessCode String
     */
    public function addAccessCode($accessCode)
    {
        $this->accessCode []= $accessCode;
        return $this;
    }

    /**
     * @param $availableFrom DateTime
     */
    public function addAvailableFrom($availableFrom)
    {
        $this->availableFrom []= $availableFrom;
        return $this;
    }

    /**
     * @param $availableThrough DateTime
     */
    public function addAvailableThrough($availableThrough)
    {
        $this->availableThrough []= $availableThrough;
        return $this;
    }

    /**
     * @param $hasDeliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function addHasDeliveryMethod($hasDeliveryMethod)
    {
        $this->hasDeliveryMethod []= $hasDeliveryMethod;
        return $this;
    }

}
