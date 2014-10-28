<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getFollowee()
    {
        return $this->followee;
    }

    /**
     * @param $followee Example\Thing\Organization|Example\Thing\Person
     */
    public function setFollowee($followee)
    {
        $this->followee = $followee;
        return $this;
    }

}
