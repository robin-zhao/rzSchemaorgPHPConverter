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
     * @var String
     */
    protected $acceptsReservations;

    /**
     * Either the actual menu or a URL of the menu.
     *
     * @var String
     */
    protected $menu;

    /**
     * The cuisine of the restaurant.
     *
     * @var String
     */
    protected $servesCuisine;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/FoodEstablishment";

    /**
     * @return String
     */
    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }

    /**
     * @param $acceptsReservations String
     */
    public function setAcceptsReservations($acceptsReservations)
    {
        $this->acceptsReservations = $acceptsReservations;
        return $this;
    }

    /**
     * @return String
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param $menu String
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
        return $this;
    }

    /**
     * @return String
     */
    public function getServesCuisine()
    {
        return $this->servesCuisine;
    }

    /**
     * @param $servesCuisine String
     */
    public function setServesCuisine($servesCuisine)
    {
        $this->servesCuisine = $servesCuisine;
        return $this;
    }

}
