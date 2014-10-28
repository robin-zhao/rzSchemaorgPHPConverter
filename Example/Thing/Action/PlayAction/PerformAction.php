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
    protected $entertainmentBusiness;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PerformAction";

    /**
     * @return Example\Thing\Organization\LocalBusiness\EntertainmentBusiness
     */
    public function getEntertainmentBusiness()
    {
        return $this->entertainmentBusiness;
    }

    /**
     * @param $entertainmentBusiness Example\Thing\Organization\LocalBusiness\EntertainmentBusiness
     */
    public function setEntertainmentBusiness($entertainmentBusiness)
    {
        $this->entertainmentBusiness = $entertainmentBusiness;
        return $this;
    }

}
