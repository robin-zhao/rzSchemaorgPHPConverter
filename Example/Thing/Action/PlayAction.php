<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action;

use Example\Thing\Action;

/**
 * Play Action
 * http://schema.org/PlayAction
 */
class PlayAction extends Action
{

    /**
     * The intended audience of the item, i.e. the group for whom the item was created.
     *
     * @var Example\Thing\Intangible\Audience
     */
    private $audience;

    /**
     * Upcoming or past event associated with this place or organization.
     *
     * @var Example\Thing\Event
     */
    private $event;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PlayAction";

    /**
     * @return Example\Thing\Intangible\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param $audience Example\Thing\Intangible\Audience
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return Example\Thing\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param $event Example\Thing\Event
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

}
