<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Parcel Delivery
 * http://schema.org/ParcelDelivery
 */
class ParcelDelivery extends Intangible
{

    /**
     * The party responsible for the parcel delivery.
     *
     * @var Example\Thing\Organization
     */
    private $carrier;

    /**
     * Destination address.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    private $deliveryAddress;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     *
     * @var Example\Thing\Event\DeliveryEvent
     */
    private $deliveryStatus;

    /**
     * The earliest date the package may arrive.
     *
     * @var DateTime
     */
    private $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     * @var DateTime
     */
    private $expectedArrivalUntil;

    /**
     * Method used for delivery or shipping.
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    private $hasDeliveryMethod;

    /**
     * Item(s) being shipped.
     *
     * @var Example\Thing\Product
     */
    private $itemShipped;

    /**
     * Shipper's address.
     *
     * @var Example\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    private $originAddress;

    /**
     * The overall order the items in this delivery were included in.
     *
     * @var Example\Thing\Intangible\Order
     */
    private $partOfOrder;

    /**
     * Shipper tracking number.
     *
     * @var String
     */
    private $trackingNumber;

    /**
     * Tracking url for the parcel delivery.
     *
     * @var String
     */
    private $trackingUrl;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ParcelDelivery";

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    public function setExpectedArrivalFrom($expectedArrivalFrom)
    {
        $this->expectedArrivalFrom = $expectedArrivalFrom;
        return $this;
    }

    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    public function setExpectedArrivalUntil($expectedArrivalUntil)
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
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

    public function getItemShipped()
    {
        return $this->itemShipped;
    }

    public function setItemShipped($itemShipped)
    {
        $this->itemShipped = $itemShipped;
        return $this;
    }

    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    public function setOriginAddress($originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    public function getPartOfOrder()
    {
        return $this->partOfOrder;
    }

    public function setPartOfOrder($partOfOrder)
    {
        $this->partOfOrder = $partOfOrder;
        return $this;
    }

    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

}
