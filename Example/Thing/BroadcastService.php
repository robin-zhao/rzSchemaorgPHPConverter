<?php

namespace Example\Thing;

use Example\Thing;

/**
 * Broadcast Service
 * http://schema.org/BroadcastService
 */
class BroadcastService extends Thing
{

    /**
     * The area within which users can expect to reach the broadcast service.
     *
     * @var Place
     */
    private $area;

    /**
     * The organization owning or operating the broadcast service.
     *
     * @var Organization
     */
    private $broadcaster;

    /**
     * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
     *
     * @var BroadcastService
     */
    private $parentService;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/BroadcastService";

    public function getarea()
    {
        return $this->area;
    }

    public function setarea($area)
    {
        $this->area = $area;
        return $this;
    }

    public function getbroadcaster()
    {
        return $this->broadcaster;
    }

    public function setbroadcaster($broadcaster)
    {
        $this->broadcaster = $broadcaster;
        return $this;
    }

    public function getparentService()
    {
        return $this->parentService;
    }

    public function setparentService($parentService)
    {
        $this->parentService = $parentService;
        return $this;
    }

}
