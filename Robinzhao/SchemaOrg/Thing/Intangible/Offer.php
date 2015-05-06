<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

/**
 * Offer
 * http://schema.org/Offer
 */
class Offer extends Intangible
{

    /**
     * The payment method(s) accepted by seller for this offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public $acceptedPaymentMethod;

    /**
     * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $addOn;

    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $advanceBookingRequirement;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public $aggregateRating;

    /**
     * The availability of this item—for example In stock, Out of stock, Pre-order, etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability
     */
    public $availability;

    /**
     * The end of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    public $availabilityEnds;

    /**
     * The beginning of the availability of the product or service included in the offer.
     *
     * @var DateTime
     */
    public $availabilityStarts;

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $availableAtOrFrom;

    /**
     * The delivery method(s) available for this offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public $availableDeliveryMethod;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction
     */
    public $businessFunction;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    public $category;

    /**
     * The typical delay between the receipt of the order and the goods leaving the warehouse.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $deliveryLeadTime;

    /**
     * The type(s) of customers for which the given offer is valid.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType
     */
    public $eligibleCustomerType;

    /**
     * The duration for which the given offer is valid.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $eligibleDuration;

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $eligibleQuantity;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
     */
    public $eligibleRegion;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public $eligibleTransactionVolume;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
     *
     * @var String
     */
    public $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers.
     *
     * @var String
     */
    public $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     *
     * @var String
     */
    public $gtin8;

    /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    public $includesObject;

    /**
     * The current approximate inventory level for the item or items.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $inventoryLevel;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public $itemCondition;

    /**
     * The item being offered.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $itemOffered;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var String
     */
    public $mpn;

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
     *
     * @var String|Float
     */
    public $price;

    /**
     * The currency (in 3-letter ISO 4217 format) of the offer price or a price component, when attached to PriceSpecification and its subtypes.
     *
     * @var String
     */
    public $priceCurrency;

    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public $priceSpecification;

    /**
     * The date after which the price is no longer available.
     *
     * @var DateTime
     */
    public $priceValidUntil;

    /**
     * A review of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public $reviews;

    /**
     * The organization or person making the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $seller;

    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     *
     * @var String
     */
    public $serialNumber;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @var String
     */
    public $sku;

    /**
     * The date when the item becomes valid.
     *
     * @var DateTime
     */
    public $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening hours data.
     *
     * @var DateTime
     */
    public $validThrough;

    /**
     * The warranty promise(s) included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public $warranty;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Offer";

    /**
     * @param $acceptedPaymentMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod
     */
    public function addAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod []= $acceptedPaymentMethod;
        return $this;
    }

    /**
     * @param $addOn Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function addAddOn($addOn)
    {
        $this->addOn []= $addOn;
        return $this;
    }

    /**
     * @param $advanceBookingRequirement Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addAdvanceBookingRequirement($advanceBookingRequirement)
    {
        $this->advanceBookingRequirement []= $advanceBookingRequirement;
        return $this;
    }

    /**
     * @param $aggregateRating Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function addAggregateRating($aggregateRating)
    {
        $this->aggregateRating []= $aggregateRating;
        return $this;
    }

    /**
     * @param $availability Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability
     */
    public function addAvailability($availability)
    {
        $this->availability []= $availability;
        return $this;
    }

    /**
     * @param $availabilityEnds DateTime
     */
    public function addAvailabilityEnds($availabilityEnds)
    {
        $this->availabilityEnds []= $availabilityEnds;
        return $this;
    }

    /**
     * @param $availabilityStarts DateTime
     */
    public function addAvailabilityStarts($availabilityStarts)
    {
        $this->availabilityStarts []= $availabilityStarts;
        return $this;
    }

    /**
     * @param $availableAtOrFrom Robinzhao\SchemaOrg\Thing\Place
     */
    public function addAvailableAtOrFrom($availableAtOrFrom)
    {
        $this->availableAtOrFrom []= $availableAtOrFrom;
        return $this;
    }

    /**
     * @param $availableDeliveryMethod Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod
     */
    public function addAvailableDeliveryMethod($availableDeliveryMethod)
    {
        $this->availableDeliveryMethod []= $availableDeliveryMethod;
        return $this;
    }

    /**
     * @param $businessFunction Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction
     */
    public function addBusinessFunction($businessFunction)
    {
        $this->businessFunction []= $businessFunction;
        return $this;
    }

    /**
     * @param $category String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    public function addCategory($category)
    {
        $this->category []= $category;
        return $this;
    }

    /**
     * @param $deliveryLeadTime Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addDeliveryLeadTime($deliveryLeadTime)
    {
        $this->deliveryLeadTime []= $deliveryLeadTime;
        return $this;
    }

    /**
     * @param $eligibleCustomerType Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType
     */
    public function addEligibleCustomerType($eligibleCustomerType)
    {
        $this->eligibleCustomerType []= $eligibleCustomerType;
        return $this;
    }

    /**
     * @param $eligibleDuration Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addEligibleDuration($eligibleDuration)
    {
        $this->eligibleDuration []= $eligibleDuration;
        return $this;
    }

    /**
     * @param $eligibleQuantity Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addEligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity []= $eligibleQuantity;
        return $this;
    }

    /**
     * @param $eligibleRegion String|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape
     */
    public function addEligibleRegion($eligibleRegion)
    {
        $this->eligibleRegion []= $eligibleRegion;
        return $this;
    }

    /**
     * @param $eligibleTransactionVolume Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public function addEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $this->eligibleTransactionVolume []= $eligibleTransactionVolume;
        return $this;
    }

    /**
     * @param $gtin13 String
     */
    public function addGtin13($gtin13)
    {
        $this->gtin13 []= $gtin13;
        return $this;
    }

    /**
     * @param $gtin14 String
     */
    public function addGtin14($gtin14)
    {
        $this->gtin14 []= $gtin14;
        return $this;
    }

    /**
     * @param $gtin8 String
     */
    public function addGtin8($gtin8)
    {
        $this->gtin8 []= $gtin8;
        return $this;
    }

    /**
     * @param $includesObject Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode
     */
    public function addIncludesObject($includesObject)
    {
        $this->includesObject []= $includesObject;
        return $this;
    }

    /**
     * @param $inventoryLevel Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addInventoryLevel($inventoryLevel)
    {
        $this->inventoryLevel []= $inventoryLevel;
        return $this;
    }

    /**
     * @param $itemCondition Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public function addItemCondition($itemCondition)
    {
        $this->itemCondition []= $itemCondition;
        return $this;
    }

    /**
     * @param $itemOffered Robinzhao\SchemaOrg\Thing\Product
     */
    public function addItemOffered($itemOffered)
    {
        $this->itemOffered []= $itemOffered;
        return $this;
    }

    /**
     * @param $mpn String
     */
    public function addMpn($mpn)
    {
        $this->mpn []= $mpn;
        return $this;
    }

    /**
     * @param $price String|Float
     */
    public function addPrice($price)
    {
        $this->price []= $price;
        return $this;
    }

    /**
     * @param $priceCurrency String
     */
    public function addPriceCurrency($priceCurrency)
    {
        $this->priceCurrency []= $priceCurrency;
        return $this;
    }

    /**
     * @param $priceSpecification Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public function addPriceSpecification($priceSpecification)
    {
        $this->priceSpecification []= $priceSpecification;
        return $this;
    }

    /**
     * @param $priceValidUntil DateTime
     */
    public function addPriceValidUntil($priceValidUntil)
    {
        $this->priceValidUntil []= $priceValidUntil;
        return $this;
    }

    /**
     * @param $review Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function addReview($review)
    {
        $this->review []= $review;
        return $this;
    }

    /**
     * @param $reviews Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function addReviews($reviews)
    {
        $this->reviews []= $reviews;
        return $this;
    }

    /**
     * @param $seller Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addSeller($seller)
    {
        $this->seller []= $seller;
        return $this;
    }

    /**
     * @param $serialNumber String
     */
    public function addSerialNumber($serialNumber)
    {
        $this->serialNumber []= $serialNumber;
        return $this;
    }

    /**
     * @param $sku String
     */
    public function addSku($sku)
    {
        $this->sku []= $sku;
        return $this;
    }

    /**
     * @param $validFrom DateTime
     */
    public function addValidFrom($validFrom)
    {
        $this->validFrom []= $validFrom;
        return $this;
    }

    /**
     * @param $validThrough DateTime
     */
    public function addValidThrough($validThrough)
    {
        $this->validThrough []= $validThrough;
        return $this;
    }

    /**
     * @param $warranty Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise
     */
    public function addWarranty($warranty)
    {
        $this->warranty []= $warranty;
        return $this;
    }


}