<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

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
    public $cookingMethod;

    /**
     * The time it takes to actually cook the dish, in ISO 8601 duration format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $cookTime;

    /**
     * An ingredient used in the recipe.
     *
     * @var String
     */
    public $ingredients;

    /**
     * Nutrition information about the recipe.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation
     */
    public $nutrition;

    /**
     * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $prepTime;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @var String
     */
    public $recipeCategory;

    /**
     * The cuisine of the recipe (for example, French or Ethopian).
     *
     * @var String
     */
    public $recipeCuisine;

    /**
     * The steps to make the dish.
     *
     * @var String
     */
    public $recipeInstructions;

    /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     *
     * @var String
     */
    public $recipeYield;

    /**
     * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $totalTime;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Recipe";

    /**
     * @param $cookingMethod String
     */
    public function addCookingMethod($cookingMethod)
    {
        $this->cookingMethod []= $cookingMethod;
        return $this;
    }

    /**
     * @param $cookTime Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addCookTime($cookTime)
    {
        $this->cookTime []= $cookTime;
        return $this;
    }

    /**
     * @param $ingredients String
     */
    public function addIngredients($ingredients)
    {
        $this->ingredients []= $ingredients;
        return $this;
    }

    /**
     * @param $nutrition Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation
     */
    public function addNutrition($nutrition)
    {
        $this->nutrition []= $nutrition;
        return $this;
    }

    /**
     * @param $prepTime Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addPrepTime($prepTime)
    {
        $this->prepTime []= $prepTime;
        return $this;
    }

    /**
     * @param $recipeCategory String
     */
    public function addRecipeCategory($recipeCategory)
    {
        $this->recipeCategory []= $recipeCategory;
        return $this;
    }

    /**
     * @param $recipeCuisine String
     */
    public function addRecipeCuisine($recipeCuisine)
    {
        $this->recipeCuisine []= $recipeCuisine;
        return $this;
    }

    /**
     * @param $recipeInstructions String
     */
    public function addRecipeInstructions($recipeInstructions)
    {
        $this->recipeInstructions []= $recipeInstructions;
        return $this;
    }

    /**
     * @param $recipeYield String
     */
    public function addRecipeYield($recipeYield)
    {
        $this->recipeYield []= $recipeYield;
        return $this;
    }

    /**
     * @param $totalTime Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addTotalTime($totalTime)
    {
        $this->totalTime []= $totalTime;
        return $this;
    }

}
