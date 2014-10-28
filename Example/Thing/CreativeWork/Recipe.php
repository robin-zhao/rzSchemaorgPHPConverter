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
    protected $cookingMethod;

    /**
     * The time it takes to actually cook the dish, in ISO 8601 duration format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    protected $cookTime;

    /**
     * An ingredient used in the recipe.
     *
     * @var String
     */
    protected $ingredients;

    /**
     * Nutrition information about the recipe.
     *
     * @var Example\Thing\Intangible\StructuredValue\NutritionInformation
     */
    protected $nutrition;

    /**
     * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    protected $prepTime;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @var String
     */
    protected $recipeCategory;

    /**
     * The cuisine of the recipe (for example, French or Ethopian).
     *
     * @var String
     */
    protected $recipeCuisine;

    /**
     * The steps to make the dish.
     *
     * @var String
     */
    protected $recipeInstructions;

    /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     *
     * @var String
     */
    protected $recipeYield;

    /**
     * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    protected $totalTime;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Recipe";

    /**
     * @return String
     */
    public function getCookingMethod()
    {
        return $this->cookingMethod;
    }

    /**
     * @param $cookingMethod String
     */
    public function setCookingMethod($cookingMethod)
    {
        $this->cookingMethod = $cookingMethod;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getCookTime()
    {
        return $this->cookTime;
    }

    /**
     * @param $cookTime Example\Thing\Intangible\Quantity\Duration
     */
    public function setCookTime($cookTime)
    {
        $this->cookTime = $cookTime;
        return $this;
    }

    /**
     * @return String
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param $ingredients String
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\StructuredValue\NutritionInformation
     */
    public function getNutrition()
    {
        return $this->nutrition;
    }

    /**
     * @param $nutrition Example\Thing\Intangible\StructuredValue\NutritionInformation
     */
    public function setNutrition($nutrition)
    {
        $this->nutrition = $nutrition;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * @param $prepTime Example\Thing\Intangible\Quantity\Duration
     */
    public function setPrepTime($prepTime)
    {
        $this->prepTime = $prepTime;
        return $this;
    }

    /**
     * @return String
     */
    public function getRecipeCategory()
    {
        return $this->recipeCategory;
    }

    /**
     * @param $recipeCategory String
     */
    public function setRecipeCategory($recipeCategory)
    {
        $this->recipeCategory = $recipeCategory;
        return $this;
    }

    /**
     * @return String
     */
    public function getRecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    /**
     * @param $recipeCuisine String
     */
    public function setRecipeCuisine($recipeCuisine)
    {
        $this->recipeCuisine = $recipeCuisine;
        return $this;
    }

    /**
     * @return String
     */
    public function getRecipeInstructions()
    {
        return $this->recipeInstructions;
    }

    /**
     * @param $recipeInstructions String
     */
    public function setRecipeInstructions($recipeInstructions)
    {
        $this->recipeInstructions = $recipeInstructions;
        return $this;
    }

    /**
     * @return String
     */
    public function getRecipeYield()
    {
        return $this->recipeYield;
    }

    /**
     * @param $recipeYield String
     */
    public function setRecipeYield($recipeYield)
    {
        $this->recipeYield = $recipeYield;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param $totalTime Example\Thing\Intangible\Quantity\Duration
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
        return $this;
    }

}
