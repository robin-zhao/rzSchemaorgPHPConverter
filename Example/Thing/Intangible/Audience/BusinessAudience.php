<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $numberofEmployees;

    /**
     * The size of the business in annual revenue.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $yearlyRevenue;

    /**
     * The age of the business.
     *
     * @var Example\Thing\Intangible\StructuredValue\QuantitativeValue
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
