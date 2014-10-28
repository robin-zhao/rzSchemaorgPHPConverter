<?php

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

    public function getcarrier()
    {
        return $this->carrier;
    }

    public function setcarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    public function getdeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    public function setdeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getdeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    public function setdeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    public function getexpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    public function setexpectedArrivalFrom($expectedArrivalFrom)
    {
        $this->expectedArrivalFrom = $expectedArrivalFrom;
        return $this;
    }

    public function getexpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    public function setexpectedArrivalUntil($expectedArrivalUntil)
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
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

    public function getitemShipped()
    {
        return $this->itemShipped;
    }

    public function setitemShipped($itemShipped)
    {
        $this->itemShipped = $itemShipped;
        return $this;
    }

    public function getoriginAddress()
    {
        return $this->originAddress;
    }

    public function setoriginAddress($originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    public function getpartOfOrder()
    {
        return $this->partOfOrder;
    }

    public function setpartOfOrder($partOfOrder)
    {
        $this->partOfOrder = $partOfOrder;
        return $this;
    }

    public function gettrackingNumber()
    {
        return $this->trackingNumber;
    }

    public function settrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function gettrackingUrl()
    {
        return $this->trackingUrl;
    }

    public function settrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

}
