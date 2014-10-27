<?php

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
     * @var AdministrativeArea
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

    public function getactiveIngredient()
    {
        return $this->activeIngredient;
    }

    public function setactiveIngredient($activeIngredient)
    {
        $this->activeIngredient = $activeIngredient;
        return $this;
    }

    public function getavailableIn()
    {
        return $this->availableIn;
    }

    public function setavailableIn($availableIn)
    {
        $this->availableIn = $availableIn;
        return $this;
    }

    public function getstrengthUnit()
    {
        return $this->strengthUnit;
    }

    public function setstrengthUnit($strengthUnit)
    {
        $this->strengthUnit = $strengthUnit;
        return $this;
    }

    public function getstrengthValue()
    {
        return $this->strengthValue;
    }

    public function setstrengthValue($strengthValue)
    {
        $this->strengthValue = $strengthValue;
        return $this;
    }

}
