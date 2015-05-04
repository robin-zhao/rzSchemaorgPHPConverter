<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Product
 * http://schema.org/Product
 */
class Product extends Thing
{

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    protected $aggregateRating;

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    protected $audience;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    protected $brand;

    /**
     * The color of the product.
     *
     * @var String
     */
    protected $color;

    /**
     * The depth of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $depth;

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
     * The height of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $height;

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $isAccessoryOrSparePartFor;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $isConsumableFor;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    protected $isSimilarTo;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition
     */
    protected $itemCondition;

    /**
     * A logo associated with an organization.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    protected $logo;

    /**
     * The manufacturer of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $manufacturer;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product\ProductModel|String
     */
    protected $model;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var String
     */
    protected $mpn;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    protected $offers;

    /**
     * The product identifier, such as ISBN. For example: <meta itemprop='productID' content='isbn:123-456-789'/>.
     *
     * @var String
     */
    protected $productID;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     * @var DateTime
     */
    protected $releaseDate;

    /**
     * A review of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    protected $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    protected $reviews;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @var String
     */
    protected $sku;

    /**
     * The weight of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $weight;

    /**
     * The width of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $width;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Product";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param $aggregateRating Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param $audience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param $brand Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return String
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param $color String
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param $depth Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $height Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getIsAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    /**
     * @param $isAccessoryOrSparePartFor Robinzhao\SchemaOrg\Thing\Product
     */
    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getIsConsumableFor()
    {
        return $this->isConsumableFor;
    }

    /**
     * @param $isConsumableFor Robinzhao\SchemaOrg\Thing\Product
     */
    public function setIsConsumableFor($isConsumableFor)
    {
        $this->isConsumableFor = $isConsumableFor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param $isRelatedTo Robinzhao\SchemaOrg\Thing\Product
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $this->isRelatedTo = $isRelatedTo;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param $isSimilarTo Robinzhao\SchemaOrg\Thing\Product
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $this->isSimilarTo = $isSimilarTo;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param $itemCondition Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public function setItemCondition($itemCondition)
    {
        $this->itemCondition = $itemCondition;
        return $this;
    }

    /**
     * @return String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param $logo String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param $manufacturer Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Product\ProductModel|String
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model Robinzhao\SchemaOrg\Thing\Product\ProductModel|String
     */
    public function setModel($model)
    {
        $this->model = $model;
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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param $offers Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    /**
     * @return String
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param $productID String
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param $releaseDate DateTime
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param $review Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param $reviews Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param $weight Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $width Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

}
