<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\StructuredValue;

use Example\Thing\Intangible\StructuredValue;

/**
 * Nutrition Information
 * http://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue
{

    /**
     * The number of calories
     *
     * @var Example\Thing\Intangible\Quantity\Energy
     */
    private $calories;

    /**
     * The number of grams of carbohydrates.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $carbohydrateContent;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $cholesterolContent;

    /**
     * The number of grams of fat.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $fatContent;

    /**
     * The number of grams of fiber.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $fiberContent;

    /**
     * The number of grams of protein.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $proteinContent;

    /**
     * The number of grams of saturated fat.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $saturatedFatContent;

    /**
     * The serving size, in terms of the number of volume or mass
     *
     * @var String
     */
    private $servingSize;

    /**
     * The number of milligrams of sodium.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $sodiumContent;

    /**
     * The number of grams of sugar.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $sugarContent;

    /**
     * The number of grams of trans fat.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $transFatContent;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var Example\Thing\Intangible\Quantity\Mass
     */
    private $unsaturatedFatContent;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/NutritionInformation";

    /**
     * @return Example\Thing\Intangible\Quantity\Energy
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param $calories Example\Thing\Intangible\Quantity\Energy
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getCarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    /**
     * @param $carbohydrateContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setCarbohydrateContent($carbohydrateContent)
    {
        $this->carbohydrateContent = $carbohydrateContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getCholesterolContent()
    {
        return $this->cholesterolContent;
    }

    /**
     * @param $cholesterolContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setCholesterolContent($cholesterolContent)
    {
        $this->cholesterolContent = $cholesterolContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getFatContent()
    {
        return $this->fatContent;
    }

    /**
     * @param $fatContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setFatContent($fatContent)
    {
        $this->fatContent = $fatContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getFiberContent()
    {
        return $this->fiberContent;
    }

    /**
     * @param $fiberContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setFiberContent($fiberContent)
    {
        $this->fiberContent = $fiberContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getProteinContent()
    {
        return $this->proteinContent;
    }

    /**
     * @param $proteinContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setProteinContent($proteinContent)
    {
        $this->proteinContent = $proteinContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getSaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    /**
     * @param $saturatedFatContent Example\Thing\Intangible\Quantity\Mass
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
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getSodiumContent()
    {
        return $this->sodiumContent;
    }

    /**
     * @param $sodiumContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setSodiumContent($sodiumContent)
    {
        $this->sodiumContent = $sodiumContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getSugarContent()
    {
        return $this->sugarContent;
    }

    /**
     * @param $sugarContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setSugarContent($sugarContent)
    {
        $this->sugarContent = $sugarContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getTransFatContent()
    {
        return $this->transFatContent;
    }

    /**
     * @param $transFatContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setTransFatContent($transFatContent)
    {
        $this->transFatContent = $transFatContent;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Mass
     */
    public function getUnsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    /**
     * @param $unsaturatedFatContent Example\Thing\Intangible\Quantity\Mass
     */
    public function setUnsaturatedFatContent($unsaturatedFatContent)
    {
        $this->unsaturatedFatContent = $unsaturatedFatContent;
        return $this;
    }

}
