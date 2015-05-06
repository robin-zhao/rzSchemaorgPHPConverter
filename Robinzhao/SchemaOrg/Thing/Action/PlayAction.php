<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action;

use Robinzhao\SchemaOrg\Thing\Action;

/**
 * Play Action
 * http://schema.org/PlayAction
 */
class PlayAction extends Action
{

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public $audience;

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
    public $context = "http://schema.org/PlayAction";

    /**
     * @param $audience Robinzhao\SchemaOrg\Thing\Intangible\Audience
     */
    public function addAudience($audience)
    {
        $this->audience []= $audience;
        return $this;
    }

    /**
     * @param $event Robinzhao\SchemaOrg\Thing\Event
     */
    public function addEvent($event)
    {
        $this->event []= $event;
        return $this;
    }


}