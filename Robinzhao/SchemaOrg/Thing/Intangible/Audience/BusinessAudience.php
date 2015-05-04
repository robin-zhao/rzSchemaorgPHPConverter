<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\Audience;

use Robinzhao\SchemaOrg\Thing\Intangible\Audience;

/**
 * Business Audience
 * http://schema.org/BusinessAudience
 */
class BusinessAudience extends Audience
{

    /**
     * The size of business by number of employees.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $numberofEmployees;

    /**
     * The size of the business in annual revenue.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $yearlyRevenue;

    /**
     * The age of the business.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    protected $yearsInOperation;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/BusinessAudience";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getNumberofEmployees()
    {
        return $this->numberofEmployees;
    }

    /**
     * @param $numberofEmployees Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setNumberofEmployees($numberofEmployees)
    {
        $this->numberofEmployees = $numberofEmployees;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getYearlyRevenue()
    {
        return $this->yearlyRevenue;
    }

    /**
     * @param $yearlyRevenue Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setYearlyRevenue($yearlyRevenue)
    {
        $this->yearlyRevenue = $yearlyRevenue;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function getYearsInOperation()
    {
        return $this->yearsInOperation;
    }

    /**
     * @param $yearsInOperation Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function setYearsInOperation($yearsInOperation)
    {
        $this->yearsInOperation = $yearsInOperation;
        return $this;
    }

}
