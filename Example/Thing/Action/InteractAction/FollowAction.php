<?php

namespace Example\Thing\Action\InteractAction;

use Example\Thing\Action\InteractAction;

/**
 * Follow Action
 * http://schema.org/FollowAction
 */
class FollowAction extends InteractAction
{

    /**
     * A sub property of object. The person or organization being followed.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $followee;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/FollowAction";

    public function getfollowee()
    {
        return $this->followee;
    }

    public function setfollowee($followee)
    {
        $this->followee = $followee;
        return $this;
    }

}
