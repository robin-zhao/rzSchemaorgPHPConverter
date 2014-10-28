<?php

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Price Specification
 * http://schema.org/PriceSpecification
 */
class PriceSpecification extends StructuredValue
{

    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $eligibleQuantity;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @var Example\Thing\Intangible\StructuredValue\PriceSpecification
     */
    private $eligibleTransactionVolume;

    /**
     * The highest price if the price is a range.
     *
     * @var Float
     */
    private $maxPrice;

    /**
     * The lowest price if the price is a range.
     *
     * @var Float
     */
    private $minPrice;

    /**
     * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
     *
     * @var String|Float
     */
    private $price;

    /**
     * The currency (in 3-letter ISO 4217 format) of the offer price or a price component, when attached to PriceSpecification and its subtypes.
     *
     * @var String
     */
    private $priceCurrency;

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
     * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
     *
     * @var Boolean
     */
    private $valueAddedTaxIncluded;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PriceSpecification";

    public function geteligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    public function seteligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity = $eligibleQuantity;
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

    public function getmaxPrice()
    {
        return $this->maxPrice;
    }

    public function setmaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    public function getminPrice()
    {
        return $this->minPrice;
    }

    public function setminPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function getprice()
    {
        return $this->price;
    }

    public function setprice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getpriceCurrency()
    {
        return $this->priceCurrency;
    }

    public function setpriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
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

    public function getvalueAddedTaxIncluded()
    {
        return $this->valueAddedTaxIncluded;
    }

    public function setvalueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
        return $this;
    }

}
