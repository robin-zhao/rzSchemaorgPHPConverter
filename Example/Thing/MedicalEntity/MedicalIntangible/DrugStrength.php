<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalIntangible;

use Example\Thing\MedicalEntity\MedicalIntangible;

/**
 * Drug Strength
 * http://schema.org/DrugStrength
 */
class DrugStrength extends MedicalIntangible
{

    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     *
     * @var String
     */
    protected $activeIngredient;

    /**
     * The location in which the strength is available.
     *
     * @var Example\Thing\Place\AdministrativeArea
     */
    protected $availableIn;

    /**
     * The units of an active ingredient's strength, e.g. mg.
     *
     * @var String
     */
    protected $strengthUnit;

    /**
     * The value of an active ingredient's strength, e.g. 325.
     *
     * @var Float
     */
    protected $strengthValue;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/DrugStrength";

    /**
     * @return String
     */
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * @param $activeIngredient String
     */
    public function setActiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    /**
     * @return Example\Thing\Place\AdministrativeArea
     */
    public function getAvailableIn()
    {
        return $this->availableIn;
    }

    /**
     * @param $availableIn Example\Thing\Place\AdministrativeArea
     */
    public function setAvailableIn($availableIn)
    {
        $this->availableIn = $availableIn;
        return $this;
    }

    /**
     * @return String
     */
    public function getStrengthUnit()
    {
        return $this->strengthUnit;
    }

    /**
     * @param $strengthUnit String
     */
    public function setStrengthUnit($strengthUnit)
    {
        $this->strengthUnit = $strengthUnit;
        return $this;
    }

    /**
     * @return Float
     */
    public function getStrengthValue()
    {
        return $this->strengthValue;
    }

    /**
     * @param $strengthValue Float
     */
    public function setStrengthValue($strengthValue)
    {
        $this->strengthValue = $strengthValue;
        return $this;
    }

}
