<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\InteractAction;

use Robinzhao\SchemaOrg\Thing\Action\InteractAction;

/**
 * Leave Action
 * http://schema.org/LeaveAction
 */
class LeaveAction extends InteractAction
{

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event
     */
    public $event;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/LeaveAction";

    /**
     * @param $event Robinzhao\SchemaOrg\Thing\Event
     */
    public function addEvent($event)
    {
        $this->event []= $event;
        return $this;
    }

}
