<?php
/**
 * This is an auto generated file.
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
    public $aggregateRating;

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public $audience;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public $brand;

    /**
     * The color of the product.
     *
     * @var String
     */
    public $color;

    /**
     * The depth of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $depth;

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
     * The height of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $height;

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $isAccessoryOrSparePartFor;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $isConsumableFor;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     * @var Robinzhao\SchemaOrg\Thing\Product
     */
    public $isSimilarTo;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition
     */
    public $itemCondition;

    /**
     * A logo associated with an organization.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $logo;

    /**
     * The manufacturer of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $manufacturer;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     * @var Robinzhao\SchemaOrg\Thing\Product\ProductModel|String
     */
    public $model;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     * @var String
     */
    public $mpn;

    /**
     * An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public $offers;

    /**
     * The product identifier, such as ISBN. For example: <meta itemprop='productID' content='isbn:123-456-789'/>.
     *
     * @var String
     */
    public $productID;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     * @var DateTime
     */
    public $releaseDate;

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
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     * @var String
     */
    public $sku;

    /**
     * The weight of the product.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $weight;

    /**
     * The width of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $width;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Product";

    /**
     * @param $aggregateRating Robinzhao\SchemaOrg\Thing\Intangible\Rating\AggregateRating
     */
    public function addAggregateRating($aggregateRating)
    {
        $this->aggregateRating []= $aggregateRating;
        return $this;
    }

    /**
     * @param $audience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function addAudience($audience)
    {
        $this->audience []= $audience;
        return $this;
    }

    /**
     * @param $brand Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Brand
     */
    public function addBrand($brand)
    {
        $this->brand []= $brand;
        return $this;
    }

    /**
     * @param $color String
     */
    public function addColor($color)
    {
        $this->color []= $color;
        return $this;
    }

    /**
     * @param $depth Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addDepth($depth)
    {
        $this->depth []= $depth;
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
     * @param $height Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addHeight($height)
    {
        $this->height []= $height;
        return $this;
    }

    /**
     * @param $isAccessoryOrSparePartFor Robinzhao\SchemaOrg\Thing\Product
     */
    public function addIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $this->isAccessoryOrSparePartFor []= $isAccessoryOrSparePartFor;
        return $this;
    }

    /**
     * @param $isConsumableFor Robinzhao\SchemaOrg\Thing\Product
     */
    public function addIsConsumableFor($isConsumableFor)
    {
        $this->isConsumableFor []= $isConsumableFor;
        return $this;
    }

    /**
     * @param $isRelatedTo Robinzhao\SchemaOrg\Thing\Product
     */
    public function addIsRelatedTo($isRelatedTo)
    {
        $this->isRelatedTo []= $isRelatedTo;
        return $this;
    }

    /**
     * @param $isSimilarTo Robinzhao\SchemaOrg\Thing\Product
     */
    public function addIsSimilarTo($isSimilarTo)
    {
        $this->isSimilarTo []= $isSimilarTo;
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
     * @param $logo String|Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addLogo($logo)
    {
        $this->logo []= $logo;
        return $this;
    }

    /**
     * @param $manufacturer Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addManufacturer($manufacturer)
    {
        $this->manufacturer []= $manufacturer;
        return $this;
    }

    /**
     * @param $model Robinzhao\SchemaOrg\Thing\Product\ProductModel|String
     */
    public function addModel($model)
    {
        $this->model []= $model;
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
     * @param $offers Robinzhao\SchemaOrg\Thing\Intangible\Offer
     */
    public function addOffers($offers)
    {
        $this->offers []= $offers;
        return $this;
    }

    /**
     * @param $productID String
     */
    public function addProductID($productID)
    {
        $this->productID []= $productID;
        return $this;
    }

    /**
     * @param $releaseDate DateTime
     */
    public function addReleaseDate($releaseDate)
    {
        $this->releaseDate []= $releaseDate;
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
     * @param $sku String
     */
    public function addSku($sku)
    {
        $this->sku []= $sku;
        return $this;
    }

    /**
     * @param $weight Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addWeight($weight)
    {
        $this->weight []= $weight;
        return $this;
    }

    /**
     * @param $width Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addWidth($width)
    {
        $this->width []= $width;
        return $this;
    }


}