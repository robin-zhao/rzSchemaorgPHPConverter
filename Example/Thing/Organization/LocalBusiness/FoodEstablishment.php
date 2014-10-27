<?php

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

    public function getacceptsReservations()
    {
        return $this->acceptsReservations;
    }

    public function setacceptsReservations($acceptsReservations)
    {
        $this->acceptsReservations = $acceptsReservations;
        return $this;
    }

    public function getmenu()
    {
        return $this->menu;
    }

    public function setmenu($menu)
    {
        $this->menu = $menu;
        return $this;
    }

    public function getservesCuisine()
    {
        return $this->servesCuisine;
    }

    public function setservesCuisine($servesCuisine)
    {
        $this->servesCuisine = $servesCuisine;
        return $this;
    }

}
