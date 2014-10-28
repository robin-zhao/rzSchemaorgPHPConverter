<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

/**
 * Drug Cost
 * http://schema.org/DrugCost
 */
class DrugCost extends MedicalIntangible
{

    /**
     * The location in which the status applies.
     *
     * @var Example\Thing\Place\AdministrativeArea
     */
    private $applicableLocation;

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugCostCategory
     */
    private $costCategory;

    /**
     * The currency (in 3-letter ISO 4217 format) of the drug cost.
     *
     * @var String
     */
    private $costCurrency;

    /**
     * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
     *
     * @var String
     */
    private $costOrigin;

    /**
     * The cost per unit of the drug.
     *
     * @var Float|String
     */
    private $costPerUnit;

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     * @var String
     */
    private $drugUnit;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DrugCost";

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    /**
     * @param $applicableLocation Example\Thing\Place\AdministrativeArea
     */
    public function setApplicableLocation($applicableLocation)
    {
        $this->applicableLocation = $applicableLocation;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugCostCategory
     */
    public function getCostCategory()
    {
        return $this->costCategory;
    }

    /**
     * @param $costCategory Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\DrugCostCategory
     */
    public function setCostCategory($costCategory)
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * @return String
     */
    public function getCostCurrency()
    {
        return $this->costCurrency;
    }

    /**
     * @param $costCurrency String
     */
    public function setCostCurrency($costCurrency)
    {
        $this->costCurrency = $costCurrency;
        return $this;
    }

    /**
     * @return String
     */
    public function getCostOrigin()
    {
        return $this->costOrigin;
    }

    /**
     * @param $costOrigin String
     */
    public function setCostOrigin($costOrigin)
    {
        $this->costOrigin = $costOrigin;
        return $this;
    }

    /**
     * @return Float|String
     */
    public function getCostPerUnit()
    {
        return $this->costPerUnit;
    }

    /**
     * @param $costPerUnit Float|String
     */
    public function setCostPerUnit($costPerUnit)
    {
        $this->costPerUnit = $costPerUnit;
        return $this;
    }

    /**
     * @return String
     */
    public function getDrugUnit()
    {
        return $this->drugUnit;
    }

    /**
     * @param $drugUnit String
     */
    public function setDrugUnit($drugUnit)
    {
        $this->drugUnit = $drugUnit;
        return $this;
    }

}
