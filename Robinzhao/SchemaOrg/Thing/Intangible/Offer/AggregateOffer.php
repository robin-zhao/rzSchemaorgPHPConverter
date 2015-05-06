<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Offer;

use Robinzhao\SchemaOrg\Thing\Intangible\Offer;

/**
 * Aggregate Offer
 * http://schema.org/AggregateOffer
 */
class AggregateOffer extends Offer
{

    /**
     * The highest price of all offers available.
     *
     * @var Float|String
     */
    public $highPrice;

    /**
     * The lowest price of all offers available.
     *
     * @var Float|String
     */
    public $lowPrice;

    /**
     * The number of offers for the product.
     *
     * @var Integer
     */
    public $offerCount;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AggregateOffer";

    /**
     * @param $highPrice Float|String
     */
    public function addHighPrice($highPrice)
    {
        $this->highPrice []= $highPrice;
        return $this;
    }

    /**
     * @param $lowPrice Float|String
     */
    public function addLowPrice($lowPrice)
    {
        $this->lowPrice []= $lowPrice;
        return $this;
    }

    /**
     * @param $offerCount Integer
     */
    public function addOfferCount($offerCount)
    {
        $this->offerCount []= $offerCount;
        return $this;
    }


}