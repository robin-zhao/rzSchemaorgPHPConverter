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

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getNumberofEmployees()
    {
        return $this->numberofEmployees;
    }

    /**
     * @param $numberofEmployees Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setNumberofEmployees($numberofEmployees)
    {
        $this->numberofEmployees = $numberofEmployees;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getYearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    /**
     * @param $yearlyRevenue Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setYearlyRevenue($yearlyRevenue)
    {
        $this->yearlyRevenue = $yearlyRevenue;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getYearsInOperation()
    {
        return $this->yearsInOperation;
    }

    /**
     * @param $yearsInOperation Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setYearsInOperation($yearsInOperation)
    {
        $this->yearsInOperation = $yearsInOperation;
        return $this;
    }

}
