<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Demand
 * http://schema.org/Demand
 */
class Demand extends Intangible
{

    /**
     * The payment method(s) accepted by seller for this offer.
     *
     * @var Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    private $acceptedPaymentMethod;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $advanceBookingRequirement;

    /**
     * The availability of this item—for example In stock, Out of stock, Pre-order, etc.
     *
     * @var Example\Thing\Intangible\Enumeration\ItemAvailability
     */
    private $availability;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    private $availabilityEnds;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    private $availabilityStarts;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @var Example\Thing\Place
     */
    private $availableAtOrFrom;

    /**
     * The delivery method(s) available for this offer.
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    private $availableDeliveryMethod;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @var Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    private $businessFunction;

    /**
     * The typical delay between the receipt of the order and the goods leaving the warehouse.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $deliveryLeadTime;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @var Example\Thing\Intangible\Enumeration\BusinessEntityType
     */
    private $eligibleCustomerType;

    /**
     * The duration for which the given offer is valid.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $eligibleDuration;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $eligibleQuantity;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
     *
     * @var String|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    private $eligibleRegion;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    private $eligibleTransactionVolume;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
     *
     * @var String
     */
    private $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers.
     *
     * @var String
     */
    private $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     *
     * @var String
     */
    private $gtin8;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     *
     * @var Example\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    private $includesObject;

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $inventoryLevel;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @var Example\Thing\Intangible\Enumeration\OfferItemCondition
     */
    private $itemCondition;

    /**
     * The item being offered.
     *
     * @var Example\Thing\Product
     */
    private $itemOffered;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var String
     */
    private $mpn;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     * @var Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    private $priceSpecification;

    /**
     * The organization or person making the offer.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $seller;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     * @var String
     */
    private $serialNumber;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @var String
     */
    private $sku;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    private $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    private $validThrough;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    private $warranty;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Demand";

    public function getacceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    public function setacceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
        return $this;
    }

    public function getadvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    public function setadvanceBookingRequirement($advanceBookingRequirement)
    {
        $this->advanceBookingRequirement = $advanceBookingRequirement;
        return $this;
    }

    public function getavailability()
    {
        return $this->availability;
    }

    public function setavailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    public function getavailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    public function setavailabilityEnds($availabilityEnds)
    {
        $this->availabilityEnds = $availabilityEnds;
        return $this;
    }

    public function getavailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    public function setavailabilityStarts($availabilityStarts)
    {
        $this->availabilityStarts = $availabilityStarts;
        return $this;
    }

    public function getavailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    public function setavailableAtOrFrom($availableAtOrFrom)
    {
        $this->availableAtOrFrom = $availableAtOrFrom;
        return $this;
    }

    public function getavailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    public function setavailableDeliveryMethod($availableDeliveryMethod)
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;
        return $this;
    }

    public function getbusinessFunction()
    {
        return $this->businessFunction;
    }

    public function setbusinessFunction($businessFunction)
    {
        $this->businessFunction = $businessFunction;
        return $this;
    }

    public function getdeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    public function setdeliveryLeadTime($deliveryLeadTime)
    {
        $this->deliveryLeadTime = $deliveryLeadTime;
        return $this;
    }

    public function geteligibleCustomerType()
    {
        return $this->eligibleCustomerType;
    }

    public function seteligibleCustomerType($eligibleCustomerType)
    {
        $this->eligibleCustomerType = $eligibleCustomerType;
        return $this;
    }

    public function geteligibleDuration()
    {
        return $this->eligibleDuration;
    }

    public function seteligibleDuration($eligibleDuration)
    {
        $this->eligibleDuration = $eligibleDuration;
        return $this;
    }

    public function geteligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    public function seteligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity = $eligibleQuantity;
        return $this;
    }

    public function geteligibleRegion()
    {
        return $this->eligibleRegion;
    }

    public function seteligibleRegion($eligibleRegion)
    {
        $this->eligibleRegion = $eligibleRegion;
        return $this;
    }

    public function geteligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    public function seteligibleTransactionVolume($eligibleTransactionVolume)
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
        return $this;
    }

    public function getgtin13()
    {
        return $this->gtin13;
    }

    public function setgtin13($gtin13)
    {
        $this->gtin13 = $gtin13;
        return $this;
    }

    public function getgtin14()
    {
        return $this->gtin14;
    }

    public function setgtin14($gtin14)
    {
        $this->gtin14 = $gtin14;
        return $this;
    }

    public function getgtin8()
    {
        return $this->gtin8;
    }

    public function setgtin8($gtin8)
    {
        $this->gtin8 = $gtin8;
        return $this;
    }

    public function getincludesObject()
    {
        return $this->includesObject;
    }

    public function setincludesObject($includesObject)
    {
        $this->includesObject = $includesObject;
        return $this;
    }

    public function getinventoryLevel()
    {
        return $this->inventoryLevel;
    }

    public function setinventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel = $inventoryLevel;
        return $this;
    }

    public function getitemCondition()
    {
        return $this->itemCondition;
    }

    public function setitemCondition($itemCondition)
    {
        $this->itemCondition = $itemCondition;
        return $this;
    }

    public function getitemOffered()
    {
        return $this->itemOffered;
    }

    public function setitemOffered($itemOffered)
    {
        $this->itemOffered = $itemOffered;
        return $this;
    }

    public function getmpn()
    {
        return $this->mpn;
    }

    public function setmpn($mpn)
    {
        $this->mpn = $mpn;
        return $this;
    }

    public function getpriceSpecification()
    {
        return $this->priceSpecification;
    }

    public function setpriceSpecification($priceSpecification)
    {
        $this->priceSpecification = $priceSpecification;
        return $this;
    }

    public function getseller()
    {
        return $this->seller;
    }

    public function setseller($seller)
    {
        $this->seller = $seller;
        return $this;
    }

    public function getserialNumber()
    {
        return $this->serialNumber;
    }

    public function setserialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getsku()
    {
        return $this->sku;
    }

    public function setsku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    public function getvalidFrom()
    {
        return $this->validFrom;
    }

    public function setvalidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getvalidThrough()
    {
        return $this->validThrough;
    }

    public function setvalidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }

    public function getwarranty()
    {
        return $this->warranty;
    }

    public function setwarranty($warranty)
    {
        $this->warranty = $warranty;
        return $this;
    }

}
