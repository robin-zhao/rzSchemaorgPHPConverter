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
    private $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @var Example\Thing\Event\FoodEvent
     */
    private $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     * @var Example\Thing\CreativeWork\Recipe
     */
    private $recipe;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/CookAction";

    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    public function setFoodEstablishment($foodEstablishment)
    {
        $this->foodEstablishment = $foodEstablishment;
        return $this;
    }

    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    public function setFoodEvent($foodEvent)
    {
        $this->foodEvent = $foodEvent;
        return $this;
    }

    public function getRecipe()
    {
        return $this->recipe;
    }

    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
        return $this;
    }

}
