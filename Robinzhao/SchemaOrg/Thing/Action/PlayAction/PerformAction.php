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
    public $entertainmentBusiness;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PerformAction";

    /**
     * @param $entertainmentBusiness Robinzhao\SchemaOrg\Thing\Organization\LocalBusiness\EntertainmentBusiness
     */
    public function addEntertainmentBusiness($entertainmentBusiness)
    {
        $this->entertainmentBusiness []= $entertainmentBusiness;
        return $this;
    }

}
