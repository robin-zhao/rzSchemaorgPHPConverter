<?php
/**
 * This is an auto generated file.
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
    public $carrier;

    /**
     * Destination address.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $deliveryAddress;

    /**
     * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\DeliveryEvent
     */
    public $deliveryStatus;

    /**
     * The earliest date the package may arrive.
     *
     * @var DateTime
     */
    public $expectedArrivalFrom;

    /**
     * The latest date the package may arrive.
     *
     * @var DateTime
     */
    public $expectedArrivalUntil;

    /**
     * Method used for delivery or shipping.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public $hasDeliveryMethod;

    /**
     * Item(s) being shipped.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $itemShipped;

    /**
     * Shipper's address.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $originAddress;

    /**
     * The overall order the items in this delivery were included in.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Order
     */
    public $partOfOrder;

    /**
     * Shipper tracking number.
     *
     * @var String
     */
    public $trackingNumber;

    /**
     * Tracking url for the parcel delivery.
     *
     * @var String
     */
    public $trackingUrl;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ParcelDelivery";

    /**
     * @param $carrier Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addCarrier($carrier)
    {
        $this->carrier []= $carrier;
        return $this;
    }

    /**
     * @param $deliveryAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function addDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress []= $deliveryAddress;
        return $this;
    }

    /**
     * @param $deliveryStatus Robinzhao\SchemaOrg\Thing\Event\DeliveryEvent
     */
    public function addDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus []= $deliveryStatus;
        return $this;
    }

    /**
     * @param $expectedArrivalFrom DateTime
     */
    public function addExpectedArrivalFrom($expectedArrivalFrom)
    {
        $this->expectedArrivalFrom []= $expectedArrivalFrom;
        return $this;
    }

    /**
     * @param $expectedArrivalUntil DateTime
     */
    public function addExpectedArrivalUntil($expectedArrivalUntil)
    {
        $this->expectedArrivalUntil []= $expectedArrivalUntil;
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

    /**
     * @param $itemShipped Robinzhao\SchemaOrg\Thing\Product
     */
    public function addItemShipped($itemShipped)
    {
        $this->itemShipped []= $itemShipped;
        return $this;
    }

    /**
     * @param $originAddress Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public function addOriginAddress($originAddress)
    {
        $this->originAddress []= $originAddress;
        return $this;
    }

    /**
     * @param $partOfOrder Robinzhao\SchemaOrg\Thing\Intangible\Order
     */
    public function addPartOfOrder($partOfOrder)
    {
        $this->partOfOrder []= $partOfOrder;
        return $this;
    }

    /**
     * @param $trackingNumber String
     */
    public function addTrackingNumber($trackingNumber)
    {
        $this->trackingNumber []= $trackingNumber;
        return $this;
    }

    /**
     * @param $trackingUrl String
     */
    public function addTrackingUrl($trackingUrl)
    {
        $this->trackingUrl []= $trackingUrl;
        return $this;
    }


}