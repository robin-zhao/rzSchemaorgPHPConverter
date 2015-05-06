<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

use Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Nutrition Information
 * http://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue
{

    /**
     * The number of calories
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Energy
     */
    public $calories;

    /**
     * The number of grams of carbohydrates.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $carbohydrateContent;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $cholesterolContent;

    /**
     * The number of grams of fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $fatContent;

    /**
     * The number of grams of fiber.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $fiberContent;

    /**
     * The number of grams of protein.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $proteinContent;

    /**
     * The number of grams of saturated fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $saturatedFatContent;

    /**
     * The serving size, in terms of the number of volume or mass
     *
     * @var String
     */
    public $servingSize;

    /**
     * The number of milligrams of sodium.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $sodiumContent;

    /**
     * The number of grams of sugar.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $sugarContent;

    /**
     * The number of grams of trans fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $transFatContent;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public $unsaturatedFatContent;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/NutritionInformation";

    /**
     * @param $calories Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Energy
     */
    public function addCalories($calories)
    {
        $this->calories []= $calories;
        return $this;
    }

    /**
     * @param $carbohydrateContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addCarbohydrateContent($carbohydrateContent)
    {
        $this->carbohydrateContent []= $carbohydrateContent;
        return $this;
    }

    /**
     * @param $cholesterolContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addCholesterolContent($cholesterolContent)
    {
        $this->cholesterolContent []= $cholesterolContent;
        return $this;
    }

    /**
     * @param $fatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addFatContent($fatContent)
    {
        $this->fatContent []= $fatContent;
        return $this;
    }

    /**
     * @param $fiberContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addFiberContent($fiberContent)
    {
        $this->fiberContent []= $fiberContent;
        return $this;
    }

    /**
     * @param $proteinContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addProteinContent($proteinContent)
    {
        $this->proteinContent []= $proteinContent;
        return $this;
    }

    /**
     * @param $saturatedFatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addSaturatedFatContent($saturatedFatContent)
    {
        $this->saturatedFatContent []= $saturatedFatContent;
        return $this;
    }

    /**
     * @param $servingSize String
     */
    public function addServingSize($servingSize)
    {
        $this->servingSize []= $servingSize;
        return $this;
    }

    /**
     * @param $sodiumContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addSodiumContent($sodiumContent)
    {
        $this->sodiumContent []= $sodiumContent;
        return $this;
    }

    /**
     * @param $sugarContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addSugarContent($sugarContent)
    {
        $this->sugarContent []= $sugarContent;
        return $this;
    }

    /**
     * @param $transFatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addTransFatContent($transFatContent)
    {
        $this->transFatContent []= $transFatContent;
        return $this;
    }

    /**
     * @param $unsaturatedFatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function addUnsaturatedFatContent($unsaturatedFatContent)
    {
        $this->unsaturatedFatContent []= $unsaturatedFatContent;
        return $this;
    }


}