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

    public function getaggregateRating()
    {
        return $this->aggregateRating;
    }

    public function setaggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    public function getaudience()
    {
        return $this->audience;
    }

    public function setaudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    public function getbrand()
    {
        return $this->brand;
    }

    public function setbrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getcolor()
    {
        return $this->color;
    }

    public function setcolor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getdepth()
    {
        return $this->depth;
    }

    public function setdepth($depth)
    {
        $this->depth = $depth;
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

    public function getheight()
    {
        return $this->height;
    }

    public function setheight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getisAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    public function setisAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
        return $this;
    }

    public function getisConsumableFor()
    {
        return $this->isConsumableFor;
    }

    public function setisConsumableFor($isConsumableFor)
    {
        $this->isConsumableFor = $isConsumableFor;
        return $this;
    }

    public function getisRelatedTo()
    {
        return $this->isRelatedTo;
    }

    public function setisRelatedTo($isRelatedTo)
    {
        $this->isRelatedTo = $isRelatedTo;
        return $this;
    }

    public function getisSimilarTo()
    {
        return $this->isSimilarTo;
    }

    public function setisSimilarTo($isSimilarTo)
    {
        $this->isSimilarTo = $isSimilarTo;
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

    public function getlogo()
    {
        return $this->logo;
    }

    public function setlogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function getmanufacturer()
    {
        return $this->manufacturer;
    }

    public function setmanufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getmodel()
    {
        return $this->model;
    }

    public function setmodel($model)
    {
        $this->model = $model;
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

    public function getoffers()
    {
        return $this->offers;
    }

    public function setoffers($offers)
    {
        $this->offers = $offers;
        return $this;
    }

    public function getproductID()
    {
        return $this->productID;
    }

    public function setproductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    public function getreleaseDate()
    {
        return $this->releaseDate;
    }

    public function setreleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function getreview()
    {
        return $this->review;
    }

    public function setreview($review)
    {
        $this->review = $review;
        return $this;
    }

    public function getreviews()
    {
        return $this->reviews;
    }

    public function setreviews($reviews)
    {
        $this->reviews = $reviews;
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

    public function getweight()
    {
        return $this->weight;
    }

    public function setweight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getwidth()
    {
        return $this->width;
    }

    public function setwidth($width)
    {
        $this->width = $width;
        return $this;
    }

}
