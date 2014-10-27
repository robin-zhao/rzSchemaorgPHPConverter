<?php

namespace Example\Thing\Action\PlayAction;

use Example\Thing\Action\PlayAction;

/**
 * Perform Action
 * http://schema.org/PerformAction
 */
class PerformAction extends PlayAction
{

    /**
     * A sub property of location. The entertainment business where the action occurred.
     *
     * @var EntertainmentBusiness
     */
    private $entertainmentBusiness;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PerformAction";

    public function getentertainmentBusiness()
    {
        return $this->entertainmentBusiness;
    }

    public function setentertainmentBusiness($entertainmentBusiness)
    {
        $this->entertainmentBusiness = $entertainmentBusiness;
        return $this;
    }

}
