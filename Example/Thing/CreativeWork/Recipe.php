<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Recipe
 * http://schema.org/Recipe
 */
class Recipe extends CreativeWork
{

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @var String
     */
    private $cookingMethod;

    /**
     * The time it takes to actually cook the dish, in ISO 8601 duration format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $cookTime;

    /**
     * An ingredient used in the recipe.
     *
     * @var String
     */
    private $ingredients;

    /**
     * Nutrition information about the recipe.
     *
     * @var Example\Thing\Intangible\StructuredValue\NutritionInformation
     */
    private $nutrition;

    /**
     * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $prepTime;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @var String
     */
    private $recipeCategory;

    /**
     * The cuisine of the recipe (for example, French or Ethopian).
     *
     * @var String
     */
    private $recipeCuisine;

    /**
     * The steps to make the dish.
     *
     * @var String
     */
    private $recipeInstructions;

    /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     *
     * @var String
     */
    private $recipeYield;

    /**
     * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $totalTime;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Recipe";

    public function getcookingMethod()
    {
        return $this->cookingMethod;
    }

    public function setcookingMethod($cookingMethod)
    {
        $this->cookingMethod = $cookingMethod;
        return $this;
    }

    public function getcookTime()
    {
        return $this->cookTime;
    }

    public function setcookTime($cookTime)
    {
        $this->cookTime = $cookTime;
        return $this;
    }

    public function getingredients()
    {
        return $this->ingredients;
    }

    public function setingredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    public function getnutrition()
    {
        return $this->nutrition;
    }

    public function setnutrition($nutrition)
    {
        $this->nutrition = $nutrition;
        return $this;
    }

    public function getprepTime()
    {
        return $this->prepTime;
    }

    public function setprepTime($prepTime)
    {
        $this->prepTime = $prepTime;
        return $this;
    }

    public function getrecipeCategory()
    {
        return $this->recipeCategory;
    }

    public function setrecipeCategory($recipeCategory)
    {
        $this->recipeCategory = $recipeCategory;
        return $this;
    }

    public function getrecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    public function setrecipeCuisine($recipeCuisine)
    {
        $this->recipeCuisine = $recipeCuisine;
        return $this;
    }

    public function getrecipeInstructions()
    {
        return $this->recipeInstructions;
    }

    public function setrecipeInstructions($recipeInstructions)
    {
        $this->recipeInstructions = $recipeInstructions;
        return $this;
    }

    public function getrecipeYield()
    {
        return $this->recipeYield;
    }

    public function setrecipeYield($recipeYield)
    {
        $this->recipeYield = $recipeYield;
        return $this;
    }

    public function gettotalTime()
    {
        return $this->totalTime;
    }

    public function settotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
        return $this;
    }

}
