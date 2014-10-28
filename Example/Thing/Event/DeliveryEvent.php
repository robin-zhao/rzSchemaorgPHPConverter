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
    protected $accessCode;

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @var DateTime
     */
    protected $availableFrom;

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @var DateTime
     */
    protected $availableThrough;

    /**
     * Method used for delivery or shipping.
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    protected $hasDeliveryMethod;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DeliveryEvent";

    /**
     * @return String
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param $accessCode String
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    /**
     * @param $availableFrom DateTime
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAvailableThrough()
    {
        return $this->availableThrough;
    }

    /**
     * @param $availableThrough DateTime
     */
    public function setAvailableThrough($availableThrough)
    {
        $this->availableThrough = $availableThrough;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    /**
     * @param $hasDeliveryMethod Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
        return $this;
    }

}
