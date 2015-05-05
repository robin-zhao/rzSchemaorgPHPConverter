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
    public $numberofEmployees;

    /**
     * The size of the business in annual revenue.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $yearlyRevenue;

    /**
     * The age of the business.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $yearsInOperation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/BusinessAudience";

    /**
     * @param $numberofEmployees Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addNumberofEmployees($numberofEmployees)
    {
        $this->numberofEmployees []= $numberofEmployees;
        return $this;
    }

    /**
     * @param $yearlyRevenue Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addYearlyRevenue($yearlyRevenue)
    {
        $this->yearlyRevenue []= $yearlyRevenue;
        return $this;
    }

    /**
     * @param $yearsInOperation Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addYearsInOperation($yearsInOperation)
    {
        $this->yearsInOperation []= $yearsInOperation;
        return $this;
    }

}
