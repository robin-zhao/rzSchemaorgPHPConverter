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
    protected $acceptedPaymentMethod;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $advanceBookingRequirement;

    /**
     * The availability of this item—for example In stock, Out of stock, Pre-order, etc.
     *
     * @var Example\Thing\Intangible\Enumeration\ItemAvailability
     */
    protected $availability;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    protected $availabilityEnds;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    protected $availabilityStarts;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @var Example\Thing\Place
     */
    protected $availableAtOrFrom;

    /**
     * The delivery method(s) available for this offer.
     *
     * @var Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    protected $availableDeliveryMethod;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @var Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    protected $businessFunction;

    /**
     * The typical delay between the receipt of the order and the goods leaving the warehouse.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $deliveryLeadTime;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @var Example\Thing\Intangible\Enumeration\BusinessEntityType
     */
    protected $eligibleCustomerType;

    /**
     * The duration for which the given offer is valid.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $eligibleDuration;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $eligibleQuantity;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
     *
     * @var String|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    protected $eligibleRegion;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    protected $eligibleTransactionVolume;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
     *
     * @var String
     */
    protected $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers.
     *
     * @var String
     */
    protected $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     *
     * @var String
     */
    protected $gtin8;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     *
     * @var Example\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    protected $includesObject;

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $inventoryLevel;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @var Example\Thing\Intangible\Enumeration\OfferItemCondition
     */
    protected $itemCondition;

    /**
     * The item being offered.
     *
     * @var Example\Thing\Product
     */
    protected $itemOffered;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var String
     */
    protected $mpn;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     * @var Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    protected $priceSpecification;

    /**
     * The organization or person making the offer.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    protected $seller;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     * @var String
     */
    protected $serialNumber;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @var String
     */
    protected $sku;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    protected $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    protected $validThrough;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    protected $warranty;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Demand";

    /**
     * @return Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * @param $acceptedPaymentMethod Example\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function setAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getAdvanceBookingRequirement()
    {
        return $this->advanceBookingRequirement;
    }

    /**
     * @param $advanceBookingRequirement Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setAdvanceBookingRequirement($advanceBookingRequirement)
    {
        $this->advanceBookingRequirement = $advanceBookingRequirement;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\ItemAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param $availability Example\Thing\Intangible\Enumeration\ItemAvailability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAvailabilityEnds()
    {
        return $this->availabilityEnds;
    }

    /**
     * @param $availabilityEnds DateTime
     */
    public function setAvailabilityEnds($availabilityEnds)
    {
        $this->availabilityEnds = $availabilityEnds;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAvailabilityStarts()
    {
        return $this->availabilityStarts;
    }

    /**
     * @param $availabilityStarts DateTime
     */
    public function setAvailabilityStarts($availabilityStarts)
    {
        $this->availabilityStarts = $availabilityStarts;
        return $this;
    }

    /**
     * @return Example\Thing\Place
     */
    public function getAvailableAtOrFrom()
    {
        return $this->availableAtOrFrom;
    }

    /**
     * @param $availableAtOrFrom Example\Thing\Place
     */
    public function setAvailableAtOrFrom($availableAtOrFrom)
    {
        $this->availableAtOrFrom = $availableAtOrFrom;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function getAvailableDeliveryMethod()
    {
        return $this->availableDeliveryMethod;
    }

    /**
     * @param $availableDeliveryMethod Example\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function setAvailableDeliveryMethod($availableDeliveryMethod)
    {
        $this->availableDeliveryMethod = $availableDeliveryMethod;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * @param $businessFunction Example\Thing\Intangible\Enumeration\BusinessFunction
     */
    public function setBusinessFunction($businessFunction)
    {
        $this->businessFunction = $businessFunction;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getDeliveryLeadTime()
    {
        return $this->deliveryLeadTime;
    }

    /**
     * @param $deliveryLeadTime Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setDeliveryLeadTime($deliveryLeadTime)
    {
        $this->deliveryLeadTime = $deliveryLeadTime;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\BusinessEntityType
     */
    public function getEligibleCustomerType()
    {
        return $this->eligibleCustomerType;
    }

    /**
     * @param $eligibleCustomerType Example\Thing\Intangible\Enumeration\BusinessEntityType
     */
    public function setEligibleCustomerType($eligibleCustomerType)
    {
        $this->eligibleCustomerType = $eligibleCustomerType;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getEligibleDuration()
    {
        return $this->eligibleDuration;
    }

    /**
     * @param $eligibleDuration Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setEligibleDuration($eligibleDuration)
    {
        $this->eligibleDuration = $eligibleDuration;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    /**
     * @param $eligibleQuantity Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setEligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity = $eligibleQuantity;
        return $this;
    }

    /**
     * @return String|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * @param $eligibleRegion String|Example\Thing\Intangible\StructuredValue\GeoShape
     */
    public function setEligibleRegion($eligibleRegion)
    {
        $this->eligibleRegion = $eligibleRegion;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    /**
     * @param $eligibleTransactionVolume Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public function setEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
        return $this;
    }

    /**
     * @return String
     */
    public function getGtin13()
    {
        return $this->gtin13;
    }

    /**
     * @param $gtin13 String
     */
    public function setGtin13($gtin13)
    {
        $this->gtin13 = $gtin13;
        return $this;
    }

    /**
     * @return String
     */
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * @param $gtin14 String
     */
    public function setGtin14($gtin14)
    {
        $this->gtin14 = $gtin14;
        return $this;
    }

    /**
     * @return String
     */
    public function getGtin8()
    {
        return $this->gtin8;
    }

    /**
     * @param $gtin8 String
     */
    public function setGtin8($gtin8)
    {
        $this->gtin8 = $gtin8;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    public function getIncludesObject()
    {
        return $this->includesObject;
    }

    /**
     * @param $includesObject Example\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    public function setIncludesObject($includesObject)
    {
        $this->includesObject = $includesObject;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    /**
     * @param $inventoryLevel Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setInventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel = $inventoryLevel;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param $itemCondition Example\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public function setItemCondition($itemCondition)
    {
        $this->itemCondition = $itemCondition;
        return $this;
    }

    /**
     * @return Example\Thing\Product
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }

    /**
     * @param $itemOffered Example\Thing\Product
     */
    public function setItemOffered($itemOffered)
    {
        $this->itemOffered = $itemOffered;
        return $this;
    }

    /**
     * @return String
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * @param $mpn String
     */
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public function getPriceSpecification()
    {
        return $this->priceSpecification;
    }

    /**
     * @param $priceSpecification Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public function setPriceSpecification($priceSpecification)
    {
        $this->priceSpecification = $priceSpecification;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param $seller Example\Thing\Organization|Example\Thing\Person
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * @return String
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param $serialNumber String
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param $sku String
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param $validFrom DateTime
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param $validThrough DateTime
     */
    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @param $warranty Example\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;
        return $this;
    }

}
