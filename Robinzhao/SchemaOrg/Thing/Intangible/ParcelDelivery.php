<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Parcel Delivery
 * http://schema.org/ParcelDelivery
 */
class ParcelDelivery extends Intangible
{

    /**
     * The party responsible for the parcel delivery.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $carrier;

    /**
     * Destination address.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $deliveryAddress;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\DeliveryEvent
     */
    protected $deliveryStatus;

    /**
     * The earliest date the package may arrive.
     *
     * @var DateTime
     */
    protected $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     * @var DateTime
     */
    protected $expectedArrivalUntil;

    /**
     * Method used for delivery or shipping.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    protected $hasDeliveryMethod;

    /**
     * Item(s) being shipped.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $itemShipped;

    /**
     * Shipper's address.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    protected $originAddress;

    /**
     * The overall order the items in this delivery were included in.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Order
     */
    protected $partOfOrder;

    /**
     * Shipper tracking number.
     *
     * @var String
     */
    protected $trackingNumber;

    /**
     * Tracking url for the parcel delivery.
     *
     * @var String
     */
    protected $trackingUrl;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ParcelDelivery";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param $carrier Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param $deliveryAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event\DeliveryEvent
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param $deliveryStatus Robinzhao\SchemaOrg\Thing\Event\DeliveryEvent
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExpectedArrivalFrom()
    {
        return $this->expectedArrivalFrom;
    }

    /**
     * @param $expectedArrivalFrom DateTime
     */
    public function setExpectedArrivalFrom($expectedArrivalFrom)
    {
        $this->expectedArrivalFrom = $expectedArrivalFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExpectedArrivalUntil()
    {
        return $this->expectedArrivalUntil;
    }

    /**
     * @param $expectedArrivalUntil DateTime
     */
    public function setExpectedArrivalUntil($expectedArrivalUntil)
    {
        $this->expectedArrivalUntil = $expectedArrivalUntil;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function getHasDeliveryMethod()
    {
        return $this->hasDeliveryMethod;
    }

    /**
     * @param $hasDeliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function setHasDeliveryMethod($hasDeliveryMethod)
    {
        $this->hasDeliveryMethod = $hasDeliveryMethod;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getItemShipped()
    {
        return $this->itemShipped;
    }

    /**
     * @param $itemShipped Robinzhao\SchemaOrg\Thing\Product
     */
    public function setItemShipped($itemShipped)
    {
        $this->itemShipped = $itemShipped;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * @param $originAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function setOriginAddress($originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Order
     */
    public function getPartOfOrder()
    {
        return $this->partOfOrder;
    }

    /**
     * @param $partOfOrder Robinzhao\SchemaOrg\Thing\Intangible\Order
     */
    public function setPartOfOrder($partOfOrder)
    {
        $this->partOfOrder = $partOfOrder;
        return $this;
    }

    /**
     * @return String
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param $trackingNumber String
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param $trackingUrl String
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

}
