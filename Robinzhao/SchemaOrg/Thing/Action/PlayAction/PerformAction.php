<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\PlayAction;

use Robinzhao\SchemaOrg\Thing\Action\PlayAction;

/**
 * Perform Action
 * http://schema.org/PerformAction
 */
class PerformAction extends PlayAction
{

    /**
     * A sub property of location. The entertainment business where the action occurred.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness
     */
    protected $entertainmentBusiness;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PerformAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness
     */
    public function getEntertainmentBusiness()
    {
        return $this->entertainmentBusiness;
    }

    /**
     * @param $entertainmentBusiness Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness
     */
    public function setEntertainmentBusiness($entertainmentBusiness)
    {
        $this->entertainmentBusiness = $entertainmentBusiness;
        return $this;
    }

}
