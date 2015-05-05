<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness;

use Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness;

/**
 * Food Establishment
 * http://schema.org/FoodEstablishment
 */
class FoodEstablishment extends LocalBusiness
{

    /**
     * Either Yes/No, or a URL at which reservations can be made.
     *
     * @var String
     */
    public $acceptsReservations;

    /**
     * Either the actual menu or a URL of the menu.
     *
     * @var String
     */
    public $menu;

    /**
     * The cuisine of the restaurant.
     *
     * @var String
     */
    public $servesCuisine;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/FoodEstablishment";

    /**
     * @param $acceptsReservations String
     */
    public function addAcceptsReservations($acceptsReservations)
    {
        $this->acceptsReservations []= $acceptsReservations;
        return $this;
    }

    /**
     * @param $menu String
     */
    public function addMenu($menu)
    {
        $this->menu []= $menu;
        return $this;
    }

    /**
     * @param $servesCuisine String
     */
    public function addServesCuisine($servesCuisine)
    {
        $this->servesCuisine []= $servesCuisine;
        return $this;
    }

}
