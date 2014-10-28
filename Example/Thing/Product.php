<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Product
 * http://schema.org/Product
 */
class Product extends Thing
{

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     * @var Example\Thing\Intangible\Rating\AggregateRating
     */
    private $aggregateRating;

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Example\Thing\Intangible\Audience
     */
    private $audience;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Example\Thing\Organization|Example\Thing\Intangible\Brand
     */
    private $brand;

    /**
     * The color of the product.
     *
     * @var String
     */
    private $color;

    /**
     * The depth of the product.
     *
     * @var Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $depth;

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
     * The height of the item.
     *
     * @var Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $height;

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     * @var Example\Thing\Product
     */
    private $isAccessoryOrSparePartFor;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     * @var Example\Thing\Product
     */
    private $isConsumableFor;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Example\Thing\Product
     */
    private $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Example\Thing\Product
     */
    private $isSimilarTo;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @var Example\Thing\Intangible\Enumeration\OfferItemCondition
     */
    private $itemCondition;

    /**
     * A logo associated with an organization.
     *
     * @var String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $logo;

    /**
     * The manufacturer of the product.
     *
     * @var Example\Thing\Organization
     */
    private $manufacturer;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @var Example\Thing\Product\ProductModel|String
     */
    private $model;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var String
     */
    private $mpn;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Example\Thing\Intangible\Offer
     */
    private $offers;

    /**
     * The product identifier, such as ISBN. For example: <meta itemprop='productID' content='isbn:123-456-789'/>.
     *
     * @var String
     */
    private $productID;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     * @var DateTime
     */
    private $releaseDate;

    /**
     * A review of the item.
     *
     * @var Example\Thing\CreativeWork\Review
     */
    private $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     *
     * @var Example\Thing\CreativeWork\Review
     */
    private $reviews;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @var String
     */
    private $sku;

    /**
     * The weight of the product.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $weight;

    /**
     * The width of the item.
     *
     * @var Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $width;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Product";

    /**
     * @return Example\Thing\Intangible\Rating\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param $aggregateRating Example\Thing\Intangible\Rating\AggregateRating
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param $audience Example\Thing\Intangible\Audience
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Intangible\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param $brand Example\Thing\Organization|Example\Thing\Intangible\Brand
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
     * @return Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param $depth Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
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
     * @return Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $height Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return Example\Thing\Product
     */
    public function getIsAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    /**
     * @param $isAccessoryOrSparePartFor Example\Thing\Product
     */
    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
        return $this;
    }

    /**
     * @return Example\Thing\Product
     */
    public function getIsConsumableFor()
    {
        return $this->isConsumableFor;
    }

    /**
     * @param $isConsumableFor Example\Thing\Product
     */
    public function setIsConsumableFor($isConsumableFor)
    {
        $this->isConsumableFor = $isConsumableFor;
        return $this;
    }

    /**
     * @return Example\Thing\Product
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param $isRelatedTo Example\Thing\Product
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $this->isRelatedTo = $isRelatedTo;
        return $this;
    }

    /**
     * @return Example\Thing\Product
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param $isSimilarTo Example\Thing\Product
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $this->isSimilarTo = $isSimilarTo;
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
     * @return String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param $logo String|Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param $manufacturer Example\Thing\Organization
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return Example\Thing\Product\ProductModel|String
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model Example\Thing\Product\ProductModel|String
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
     * @return Example\Thing\Intangible\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param $offers Example\Thing\Intangible\Offer
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
     * @return Example\Thing\CreativeWork\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param $review Example\Thing\CreativeWork\Review
     */
    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param $reviews Example\Thing\CreativeWork\Review
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
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param $weight Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $width Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

}
