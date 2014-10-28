<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\CreateAction;

use Example\Thing\Action\CreateAction;

/**
 * Cook Action
 * http://schema.org/CookAction
 */
class CookAction extends CreateAction
{

    /**
     * A sub property of location. The specific food establishment where the action occurreed.
     *
     * @var Example\Thing\Organization\LocalBusiness\FoodEstablishment|Example\Thing\Place
     */
    protected $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @var Example\Thing\Event\FoodEvent
     */
    protected $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     * @var Example\Thing\CreativeWork\Recipe
     */
    protected $recipe;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/CookAction";

    /**
     * @return Example\Thing\Organization\LocalBusiness\FoodEstablishment|Example\Thing\Place
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    /**
     * @param $foodEstablishment Example\Thing\Organization\LocalBusiness\FoodEstablishment|Example\Thing\Place
     */
    public function setFoodEstablishment($foodEstablishment)
    {
        $this->foodEstablishment = $foodEstablishment;
        return $this;
    }

    /**
     * @return Example\Thing\Event\FoodEvent
     */
    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    /**
     * @param $foodEvent Example\Thing\Event\FoodEvent
     */
    public function setFoodEvent($foodEvent)
    {
        $this->foodEvent = $foodEvent;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * @param $recipe Example\Thing\CreativeWork\Recipe
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
        return $this;
    }

}
