<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\CreateAction;

use Robinzhao\SchemaOrg\Thing\Action\CreateAction;

/**
 * Cook Action
 * http://schema.org/CookAction
 */
class CookAction extends CreateAction
{

    /**
     * A sub property of location. The specific food establishment where the action occurreed.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment|Robinzhao\SchemaOrg\Thing\Place
     */
    protected $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\FoodEvent
     */
    protected $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Recipe
     */
    protected $recipe;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/CookAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment|Robinzhao\SchemaOrg\Thing\Place
     */
    public function getFoodEstablishment()
    {
        return $this->foodEstablishment;
    }

    /**
     * @param $foodEstablishment Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment|Robinzhao\SchemaOrg\Thing\Place
     */
    public function setFoodEstablishment($foodEstablishment)
    {
        $this->foodEstablishment = $foodEstablishment;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event\FoodEvent
     */
    public function getFoodEvent()
    {
        return $this->foodEvent;
    }

    /**
     * @param $foodEvent Robinzhao\SchemaOrg\Thing\Event\FoodEvent
     */
    public function setFoodEvent($foodEvent)
    {
        $this->foodEvent = $foodEvent;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * @param $recipe Robinzhao\SchemaOrg\Thing\CreativeWork\Recipe
     */
    public function setRecipe($recipe)
    {
        $this->recipe = $recipe;
        return $this;
    }

}
