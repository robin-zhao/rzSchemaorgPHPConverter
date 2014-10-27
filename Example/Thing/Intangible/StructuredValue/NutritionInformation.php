<?php

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
     * @var Energy
     */
    private $calories;

    /**
     * The number of grams of carbohydrates.
     *
     * @var Mass
     */
    private $carbohydrateContent;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var Mass
     */
    private $cholesterolContent;

    /**
     * The number of grams of fat.
     *
     * @var Mass
     */
    private $fatContent;

    /**
     * The number of grams of fiber.
     *
     * @var Mass
     */
    private $fiberContent;

    /**
     * The number of grams of protein.
     *
     * @var Mass
     */
    private $proteinContent;

    /**
     * The number of grams of saturated fat.
     *
     * @var Mass
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
     * @var Mass
     */
    private $sodiumContent;

    /**
     * The number of grams of sugar.
     *
     * @var Mass
     */
    private $sugarContent;

    /**
     * The number of grams of trans fat.
     *
     * @var Mass
     */
    private $transFatContent;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var Mass
     */
    private $unsaturatedFatContent;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/NutritionInformation";

    public function getcalories()
    {
        return $this->calories;
    }

    public function setcalories($calories)
    {
        $this->calories = $calories;
        return $this;
    }

    public function getcarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    public function setcarbohydrateContent($carbohydrateContent)
    {
        $this->carbohydrateContent = $carbohydrateContent;
        return $this;
    }

    public function getcholesterolContent()
    {
        return $this->cholesterolContent;
    }

    public function setcholesterolContent($cholesterolContent)
    {
        $this->cholesterolContent = $cholesterolContent;
        return $this;
    }

    public function getfatContent()
    {
        return $this->fatContent;
    }

    public function setfatContent($fatContent)
    {
        $this->fatContent = $fatContent;
        return $this;
    }

    public function getfiberContent()
    {
        return $this->fiberContent;
    }

    public function setfiberContent($fiberContent)
    {
        $this->fiberContent = $fiberContent;
        return $this;
    }

    public function getproteinContent()
    {
        return $this->proteinContent;
    }

    public function setproteinContent($proteinContent)
    {
        $this->proteinContent = $proteinContent;
        return $this;
    }

    public function getsaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    public function setsaturatedFatContent($saturatedFatContent)
    {
        $this->saturatedFatContent = $saturatedFatContent;
        return $this;
    }

    public function getservingSize()
    {
        return $this->servingSize;
    }

    public function setservingSize($servingSize)
    {
        $this->servingSize = $servingSize;
        return $this;
    }

    public function getsodiumContent()
    {
        return $this->sodiumContent;
    }

    public function setsodiumContent($sodiumContent)
    {
        $this->sodiumContent = $sodiumContent;
        return $this;
    }

    public function getsugarContent()
    {
        return $this->sugarContent;
    }

    public function setsugarContent($sugarContent)
    {
        $this->sugarContent = $sugarContent;
        return $this;
    }

    public function gettransFatContent()
    {
        return $this->transFatContent;
    }

    public function settransFatContent($transFatContent)
    {
        $this->transFatContent = $transFatContent;
        return $this;
    }

    public function getunsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    public function setunsaturatedFatContent($unsaturatedFatContent)
    {
        $this->unsaturatedFatContent = $unsaturatedFatContent;
        return $this;
    }

}
