<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

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
    public $activeIngredient;

    /**
     * The location in which the strength is available.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public $availableIn;

    /**
     * The units of an active ingredient's strength, e.g. mg.
     *
     * @var String
     */
    public $strengthUnit;

    /**
     * The value of an active ingredient's strength, e.g. 325.
     *
     * @var Float
     */
    public $strengthValue;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/DrugStrength";

    /**
     * @param $activeIngredient String
     */
    public function addActiveIngredient($activeIngredient)
    {
        $this->activeIngredient []= $activeIngredient;
        return $this;
    }

    /**
     * @param $availableIn Robinzhao\SchemaOrg\Thing\Place\AdministrativeArea
     */
    public function addAvailableIn($availableIn)
    {
        $this->availableIn []= $availableIn;
        return $this;
    }

    /**
     * @param $strengthUnit String
     */
    public function addStrengthUnit($strengthUnit)
    {
        $this->strengthUnit []= $strengthUnit;
        return $this;
    }

    /**
     * @param $strengthValue Float
     */
    public function addStrengthValue($strengthValue)
    {
        $this->strengthValue []= $strengthValue;
        return $this;
    }


}