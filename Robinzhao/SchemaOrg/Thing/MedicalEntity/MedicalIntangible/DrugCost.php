<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
 * Drug Cost
 * http://schema.org/DrugCost
 */
class DrugCost extends MedicalIntangible
{

    /**
     * The location in which the status applies.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $applicableLocation;

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugCostCategory
     */
    public $costCategory;

    /**
     * The currency (in 3-letter ISO 4217 format) of the drug cost.
     *
     * @var String
     */
    public $costCurrency;

    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     *
     * @var String
     */
    public $costOrigin;

    /**
     * The cost per unit of the drug.
     *
     * @var Float|String
     */
    public $costPerUnit;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     * @var String
     */
    public $drugUnit;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DrugCost";

    /**
     * @param $applicableLocation Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addApplicableLocation($applicableLocation)
    {
        $this->applicableLocation []= $applicableLocation;
        return $this;
    }

    /**
     * @param $costCategory Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugCostCategory
     */
    public function addCostCategory($costCategory)
    {
        $this->costCategory []= $costCategory;
        return $this;
    }

    /**
     * @param $costCurrency String
     */
    public function addCostCurrency($costCurrency)
    {
        $this->costCurrency []= $costCurrency;
        return $this;
    }

    /**
     * @param $costOrigin String
     */
    public function addCostOrigin($costOrigin)
    {
        $this->costOrigin []= $costOrigin;
        return $this;
    }

    /**
     * @param $costPerUnit Float|String
     */
    public function addCostPerUnit($costPerUnit)
    {
        $this->costPerUnit []= $costPerUnit;
        return $this;
    }

    /**
     * @param $drugUnit String
     */
    public function addDrugUnit($drugUnit)
    {
        $this->drugUnit []= $drugUnit;
        return $this;
    }

}
