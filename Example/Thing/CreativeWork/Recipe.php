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

    public function getCookingMethod()
    {
        return $this->cookingMethod;
    }

    public function setCookingMethod($cookingMethod)
    {
        $this->cookingMethod = $cookingMethod;
        return $this;
    }

    public function getCookTime()
    {
        return $this->cookTime;
    }

    public function setCookTime($cookTime)
    {
        $this->cookTime = $cookTime;
        return $this;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    public function getNutrition()
    {
        return $this->nutrition;
    }

    public function setNutrition($nutrition)
    {
        $this->nutrition = $nutrition;
        return $this;
    }

    public function getPrepTime()
    {
        return $this->prepTime;
    }

    public function setPrepTime($prepTime)
    {
        $this->prepTime = $prepTime;
        return $this;
    }

    public function getRecipeCategory()
    {
        return $this->recipeCategory;
    }

    public function setRecipeCategory($recipeCategory)
    {
        $this->recipeCategory = $recipeCategory;
        return $this;
    }

    public function getRecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    public function setRecipeCuisine($recipeCuisine)
    {
        $this->recipeCuisine = $recipeCuisine;
        return $this;
    }

    public function getRecipeInstructions()
    {
        return $this->recipeInstructions;
    }

    public function setRecipeInstructions($recipeInstructions)
    {
        $this->recipeInstructions = $recipeInstructions;
        return $this;
    }

    public function getRecipeYield()
    {
        return $this->recipeYield;
    }

    public function setRecipeYield($recipeYield)
    {
        $this->recipeYield = $recipeYield;
        return $this;
    }

    public function getTotalTime()
    {
        return $this->totalTime;
    }

    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
        return $this;
    }

}
