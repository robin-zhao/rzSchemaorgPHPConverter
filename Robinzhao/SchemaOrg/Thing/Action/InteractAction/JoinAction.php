<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\InteractAction;

use Robinzhao\SchemaOrg\Thing\Action\InteractAction;

/**
 * Join Action
 * http://schema.org/JoinAction
 */
class JoinAction extends InteractAction
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
    public $context = "http://schema.org/JoinAction";

    /**
     * @param $event Robinzhao\SchemaOrg\Thing\Event
     */
    public function addEvent($event)
    {
        $this->event []= $event;
        return $this;
    }


}