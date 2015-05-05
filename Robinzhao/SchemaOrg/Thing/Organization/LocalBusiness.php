<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Organization;

use Robinzhao\SchemaOrg\Thing\Organization;

/**
 * Local Business
 * http://schema.org/LocalBusiness
 */
class LocalBusiness extends Organization
{

    /**
     * The larger organization that this local business is a branch of, if any.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $branchOf;

    /**
     * The currency accepted (in ISO 4217 currency format).
     *
     * @var String
     */
    public $currenciesAccepted;

    /**
     * The opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.- Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times are specified using 24:00 time. For example, 3pm is specified as 15:00. - Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $openingHours;

    /**
     * Cash, credit card, etc.
     *
     * @var String
     */
    public $paymentAccepted;

    /**
     * The price range of the business, for example $$$.
     *
     * @var String
     */
    public $priceRange;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/LocalBusiness";

    /**
     * @param $branchOf Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addBranchOf($branchOf)
    {
        $this->branchOf []= $branchOf;
        return $this;
    }

    /**
     * @param $currenciesAccepted String
     */
    public function addCurrenciesAccepted($currenciesAccepted)
    {
        $this->currenciesAccepted []= $currenciesAccepted;
        return $this;
    }

    /**
     * @param $openingHours Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addOpeningHours($openingHours)
    {
        $this->openingHours []= $openingHours;
        return $this;
    }

    /**
     * @param $paymentAccepted String
     */
    public function addPaymentAccepted($paymentAccepted)
    {
        $this->paymentAccepted []= $paymentAccepted;
        return $this;
    }

    /**
     * @param $priceRange String
     */
    public function addPriceRange($priceRange)
    {
        $this->priceRange []= $priceRange;
        return $this;
    }

}
