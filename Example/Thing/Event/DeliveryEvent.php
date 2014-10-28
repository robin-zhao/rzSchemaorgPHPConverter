<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Event;

use Example\Thing\Event;

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
    private $accessCode;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @var DateTime
     */
    private $availableFrom;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @var DateTime
     */
    private $availableThrough;

    /**
     * Method used for delivery or shipping.
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    private $hasDeliveryMethod;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DeliveryEvent";

    public function getAccessCode()
    {
        return $this->accessCode;
    }

    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
        return $this;
    }

    public function getAvailableThrough()
    {
        return $this->availableThrough;
    }

    public function setAvailableThrough($availableThrough)
    {
        $this->availableThrough = $availableThrough;
        return $this;
    }

    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
        return $this;
    }

}
