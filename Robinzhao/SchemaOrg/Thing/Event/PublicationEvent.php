<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Event;

use Robinzhao\SchemaOrg\Thing\Event;

/**
 * Publication Event
 * http://schema.org/PublicationEvent
 */
class PublicationEvent extends Event
{

    /**
     * A flag to signal that the publication is accessible for free.
     *
     * @var Boolean
     */
    public $free;

    /**
     * A broadcast service associated with the publication event
     *
     * @var Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    public $publishedOn;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PublicationEvent";

    /**
     * @param $free Boolean
     */
    public function addFree($free)
    {
        $this->free []= $free;
        return $this;
    }

    /**
     * @param $publishedOn Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    public function addPublishedOn($publishedOn)
    {
        $this->publishedOn []= $publishedOn;
        return $this;
    }

}
