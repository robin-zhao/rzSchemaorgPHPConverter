<?php

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
     * @var AdministrativeArea
     */
    private $applicableLocation;

    /**
     * The category of cost, such as wholesale, retail, reimbursement cap, etc.
     *
     * @var DrugCostCategory
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

    public function getapplicableLocation()
    {
        return $this->applicableLocation;
    }

    public function setapplicableLocation($applicableLocation)
    {
        $this->applicableLocation = $applicableLocation;
        return $this;
    }

    public function getcostCategory()
    {
        return $this->costCategory;
    }

    public function setcostCategory($costCategory)
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    public function getcostCurrency()
    {
        return $this->costCurrency;
    }

    public function setcostCurrency($costCurrency)
    {
        $this->costCurrency = $costCurrency;
        return $this;
    }

    public function getcostOrigin()
    {
        return $this->costOrigin;
    }

    public function setcostOrigin($costOrigin)
    {
        $this->costOrigin = $costOrigin;
        return $this;
    }

    public function getcostPerUnit()
    {
        return $this->costPerUnit;
    }

    public function setcostPerUnit($costPerUnit)
    {
        $this->costPerUnit = $costPerUnit;
        return $this;
    }

    public function getdrugUnit()
    {
        return $this->drugUnit;
    }

    public function setdrugUnit($drugUnit)
    {
        $this->drugUnit = $drugUnit;
        return $this;
    }

}
