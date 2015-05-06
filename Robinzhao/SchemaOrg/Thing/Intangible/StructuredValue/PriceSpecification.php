<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Price Specification
 * http://schema.org/PriceSpecification
 */
class PriceSpecification extends StructuredValue
{

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $eligibleQuantity;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
     */
    public $eligibleTransactionVolume;

    /**
     * The highest price if the price is a range.
     *
     * @var Float
     */
    public $maxPrice;

    /**
     * The lowest price if the price is a range.
     *
     * @var Float
     */
    public $minPrice;

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
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     *
     * @var Boolean
     */
    public $valueAddedTaxIncluded;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PriceSpecification";

    /**
     * @param $eligibleQuantity Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addEligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity []= $eligibleQuantity;
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
     * @param $maxPrice Float
     */
    public function addMaxPrice($maxPrice)
    {
        $this->maxPrice []= $maxPrice;
        return $this;
    }

    /**
     * @param $minPrice Float
     */
    public function addMinPrice($minPrice)
    {
        $this->minPrice []= $minPrice;
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
     * @param $valueAddedTaxIncluded Boolean
     */
    public function addValueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $this->valueAddedTaxIncluded []= $valueAddedTaxIncluded;
        return $this;
    }


}