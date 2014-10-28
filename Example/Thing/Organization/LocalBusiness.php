<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Organization;

use Example\Thing\Organization;

/**
 * Local Business
 * http://schema.org/LocalBusiness
 */
class LocalBusiness extends Organization
{

    /**
     * The larger organization that this local business is a branch of, if any.
     *
     * @var Example\Thing\Organization
     */
    protected $branchOf;

    /**
     * The currency accepted (in ISO 4217 currency format).
     *
     * @var String
     */
    protected $currenciesAccepted;

    /**
     * The opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.- Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times are specified using 24:00 time. For example, 3pm is specified as 15:00. - Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    protected $openingHours;

    /**
     * Cash, credit card, etc.
     *
     * @var String
     */
    protected $paymentAccepted;

    /**
     * The price range of the business, for example $$$.
     *
     * @var String
     */
    protected $priceRange;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/LocalBusiness";

    /**
     * @return Example\Thing\Organization
     */
    public function getBranchOf()
    {
        return $this->branchOf;
    }

    /**
     * @param $branchOf Example\Thing\Organization
     */
    public function setBranchOf($branchOf)
    {
        $this->branchOf = $branchOf;
        return $this;
    }

    /**
     * @return String
     */
    public function getCurrenciesAccepted()
    {
        return $this->currenciesAccepted;
    }

    /**
     * @param $currenciesAccepted String
     */
    public function setCurrenciesAccepted($currenciesAccepted)
    {
        $this->currenciesAccepted = $currenciesAccepted;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param $openingHours Example\Thing\Intangible\Quantity\Duration
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
        return $this;
    }

    /**
     * @return String
     */
    public function getPaymentAccepted()
    {
        return $this->paymentAccepted;
    }

    /**
     * @param $paymentAccepted String
     */
    public function setPaymentAccepted($paymentAccepted)
    {
        $this->paymentAccepted = $paymentAccepted;
        return $this;
    }

    /**
     * @return String
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * @param $priceRange String
     */
    public function setPriceRange($priceRange)
    {
        $this->priceRange = $priceRange;
        return $this;
    }

}
