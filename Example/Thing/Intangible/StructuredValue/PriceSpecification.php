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
     * @return Float
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param $maxPrice Float
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return Float
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param $minPrice Float
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    /**
     * @return String|Float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price String|Float
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return String
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * @param $priceCurrency String
     */
    public function setPriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
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
     * @return Boolean
     */
    public function getValueAddedTaxIncluded()
    {
        return $this->valueAddedTaxIncluded;
    }

    /**
     * @param $valueAddedTaxIncluded Boolean
     */
    public function setValueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
        return $this;
    }

}
