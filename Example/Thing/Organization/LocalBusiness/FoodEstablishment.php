<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Organization\LocalBusiness;

use Example\Thing\Organization\LocalBusiness;

/**
 * Food Establishment
 * http://schema.org/FoodEstablishment
 */
class FoodEstablishment extends LocalBusiness
{

    /**
     * Either Yes/No, or a URL at which reservations can be made.
     *
     * @var String|String
     */
    private $acceptsReservations;

    /**
     * Either the actual menu or a URL of the menu.
     *
     * @var String|String
     */
    private $menu;

    /**
     * The cuisine of the restaurant.
     *
     * @var String
     */
    private $servesCuisine;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/FoodEstablishment";

    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }

    public function setAcceptsReservations($acceptsReservations)
    {
        $this->acceptsReservations = $acceptsReservations;
        return $this;
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
        return $this;
    }

    public function getServesCuisine()
    {
        return $this->servesCuisine;
    }

    public function setServesCuisine($servesCuisine)
    {
        $this->servesCuisine = $servesCuisine;
        return $this;
    }

}
