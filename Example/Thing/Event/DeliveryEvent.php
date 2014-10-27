<?php

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
     * @var DeliveryMethod
     */
    private $hasDeliveryMethod;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DeliveryEvent";

    public function getaccessCode()
    {
        return $this->accessCode;
    }

    public function setaccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    public function getavailableFrom()
    {
        return $this->availableFrom;
    }

    public function setavailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
        return $this;
    }

    public function getavailableThrough()
    {
        return $this->availableThrough;
    }

    public function setavailableThrough($availableThrough)
    {
        $this->availableThrough = $availableThrough;
        return $this;
    }

    public function gethasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    public function sethasDeliveryMethod($hasDeliveryMethod)
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
        return $this;
    }

}
