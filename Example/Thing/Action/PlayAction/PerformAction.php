<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Organization\LocalBusiness\EntertainmentBusiness
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
