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
    private $activeIngredient;

    /**
     * The location in which the strength is available.
     *
     * @var Example\Thing\Place\AdministrativeArea
     */
    private $availableIn;

    /**
     * The units of an active ingredient's strength, e.g. mg.
     *
     * @var String
     */
    private $strengthUnit;

    /**
     * The value of an active ingredient's strength, e.g. 325.
     *
     * @var Float
     */
    private $strengthValue;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DrugStrength";

    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setActiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    public function getAvailableIn()
    {
        return $this->availableIn;
    }

    public function setAvailableIn($availableIn)
    {
        $this->availableIn = $availableIn;
        return $this;
    }

    public function getStrengthUnit()
    {
        return $this->strengthUnit;
    }

    public function setStrengthUnit($strengthUnit)
    {
        $this->strengthUnit = $strengthUnit;
        return $this;
    }

    public function getStrengthValue()
    {
        return $this->strengthValue;
    }

    public function setStrengthValue($strengthValue)
    {
        $this->strengthValue = $strengthValue;
        return $this;
    }

}
