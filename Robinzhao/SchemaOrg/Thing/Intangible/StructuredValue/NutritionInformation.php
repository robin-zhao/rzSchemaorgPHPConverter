<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $calories;

    /**
     * The number of grams of carbohydrates.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $carbohydrateContent;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $cholesterolContent;

    /**
     * The number of grams of fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $fatContent;

    /**
     * The number of grams of fiber.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $fiberContent;

    /**
     * The number of grams of protein.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $proteinContent;

    /**
     * The number of grams of saturated fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $saturatedFatContent;

    /**
     * The serving size, in terms of the number of volume or mass
     *
     * @var String
     */
    protected $servingSize;

    /**
     * The number of milligrams of sodium.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $sodiumContent;

    /**
     * The number of grams of sugar.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $sugarContent;

    /**
     * The number of grams of trans fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $transFatContent;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    protected $unsaturatedFatContent;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/NutritionInformation";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Energy
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param $calories Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Energy
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getCarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    /**
     * @param $carbohydrateContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setCarbohydrateContent($carbohydrateContent)
    {
        $this->carbohydrateContent = $carbohydrateContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getCholesterolContent()
    {
        return $this->cholesterolContent;
    }

    /**
     * @param $cholesterolContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setCholesterolContent($cholesterolContent)
    {
        $this->cholesterolContent = $cholesterolContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getFatContent()
    {
        return $this->fatContent;
    }

    /**
     * @param $fatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setFatContent($fatContent)
    {
        $this->fatContent = $fatContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getFiberContent()
    {
        return $this->fiberContent;
    }

    /**
     * @param $fiberContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setFiberContent($fiberContent)
    {
        $this->fiberContent = $fiberContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getProteinContent()
    {
        return $this->proteinContent;
    }

    /**
     * @param $proteinContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setProteinContent($proteinContent)
    {
        $this->proteinContent = $proteinContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getSaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    /**
     * @param $saturatedFatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setSaturatedFatContent($saturatedFatContent)
    {
        $this->saturatedFatContent = $saturatedFatContent;
        return $this;
    }

    /**
     * @return String
     */
    public function getServingSize()
    {
        return $this->servingSize;
    }

    /**
     * @param $servingSize String
     */
    public function setServingSize($servingSize)
    {
        $this->servingSize = $servingSize;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getSodiumContent()
    {
        return $this->sodiumContent;
    }

    /**
     * @param $sodiumContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setSodiumContent($sodiumContent)
    {
        $this->sodiumContent = $sodiumContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getSugarContent()
    {
        return $this->sugarContent;
    }

    /**
     * @param $sugarContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setSugarContent($sugarContent)
    {
        $this->sugarContent = $sugarContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getTransFatContent()
    {
        return $this->transFatContent;
    }

    /**
     * @param $transFatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setTransFatContent($transFatContent)
    {
        $this->transFatContent = $transFatContent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function getUnsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    /**
     * @param $unsaturatedFatContent Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Mass
     */
    public function setUnsaturatedFatContent($unsaturatedFatContent)
    {
        $this->unsaturatedFatContent = $unsaturatedFatContent;
        return $this;
    }

}
