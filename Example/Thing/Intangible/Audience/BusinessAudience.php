<?php

namespace Example\Thing\Intangible\Audience;

use Example\Thing\Intangible\Audience;

/**
 * Business Audience
 * http://schema.org/BusinessAudience
 */
class BusinessAudience extends Audience
{

    /**
     * The size of business by number of employees.
     *
     * @var QuantitativeValue
     */
    private $numberofEmployees;

    /**
     * The size of the business in annual revenue.
     *
     * @var QuantitativeValue
     */
    private $yearlyRevenue;

    /**
     * The age of the business.
     *
     * @var QuantitativeValue
     */
    private $yearsInOperation;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/BusinessAudience";

    public function getnumberofEmployees()
    {
        return $this->numberofEmployees;
    }

    public function setnumberofEmployees($numberofEmployees)
    {
        $this->numberofEmployees = $numberofEmployees;
        return $this;
    }

    public function getyearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    public function setyearlyRevenue($yearlyRevenue)
    {
        $this->yearlyRevenue = $yearlyRevenue;
        return $this;
    }

    public function getyearsInOperation()
    {
        return $this->yearsInOperation;
    }

    public function setyearsInOperation($yearsInOperation)
    {
        $this->yearsInOperation = $yearsInOperation;
        return $this;
    }

}
