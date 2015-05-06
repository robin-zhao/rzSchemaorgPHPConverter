<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Broadcast Service
 * http://schema.org/BroadcastService
 */
class BroadcastService extends Thing
{

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $area;

    /**
     * The organization owning or operating the broadcast service.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $broadcaster;

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     * @var Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    public $parentService;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/BroadcastService";

    /**
     * @param $area Robinzhao\SchemaOrg\Thing\Place
     */
    public function addArea($area)
    {
        $this->area []= $area;
        return $this;
    }

    /**
     * @param $broadcaster Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addBroadcaster($broadcaster)
    {
        $this->broadcaster []= $broadcaster;
        return $this;
    }

    /**
     * @param $parentService Robinzhao\SchemaOrg\Thing\BroadcastService
     */
    public function addParentService($parentService)
    {
        $this->parentService []= $parentService;
        return $this;
    }


}