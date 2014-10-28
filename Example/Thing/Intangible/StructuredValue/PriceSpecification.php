<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    public function setEligibleQuantity($eligibleQuantity)
    {
        $this->eligibleQuantity = $eligibleQuantity;
        return $this;
    }

    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    public function setEligibleTransactionVolume($eligibleTransactionVolume)
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
        return $this;
    }

    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    public function getMinPrice()
    {
        return $this->minPrice;
    }

    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    public function setPriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
        return $this;
    }

    public function getValidFrom()
    {
        return $this->validFrom;
    }

    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    public function getValidThrough()
    {
        return $this->validThrough;
    }

    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }

    public function getValueAddedTaxIncluded()
    {
        return $this->valueAddedTaxIncluded;
    }

    public function setValueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
        return $this;
    }

}
