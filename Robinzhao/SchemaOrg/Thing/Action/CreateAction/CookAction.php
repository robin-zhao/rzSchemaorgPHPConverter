<?php
/**
 * This is an auto generated file.
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
    public $foodEstablishment;

    /**
     * A sub property of location. The specific food event where the action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\FoodEvent
     */
    public $foodEvent;

    /**
     * A sub property of instrument. The recipe/instructions used to perform the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Recipe
     */
    public $recipe;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/CookAction";

    /**
     * @param $foodEstablishment Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment|Robinzhao\SchemaOrg\Thing\Place
     */
    public function addFoodEstablishment($foodEstablishment)
    {
        $this->foodEstablishment []= $foodEstablishment;
        return $this;
    }

    /**
     * @param $foodEvent Robinzhao\SchemaOrg\Thing\Event\FoodEvent
     */
    public function addFoodEvent($foodEvent)
    {
        $this->foodEvent []= $foodEvent;
        return $this;
    }

    /**
     * @param $recipe Robinzhao\SchemaOrg\Thing\CreativeWork\Recipe
     */
    public function addRecipe($recipe)
    {
        $this->recipe []= $recipe;
        return $this;
    }


}