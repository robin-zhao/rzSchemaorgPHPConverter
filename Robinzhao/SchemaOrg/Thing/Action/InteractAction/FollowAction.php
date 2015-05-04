<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\InteractAction;

use Robinzhao\SchemaOrg\Thing\Action\InteractAction;

/**
 * Follow Action
 * http://schema.org/FollowAction
 */
class FollowAction extends InteractAction
{

    /**
     * A sub property of object. The person or organization being followed.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $followee;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/FollowAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getFollowee()
    {
        return $this->followee;
    }

    /**
     * @param $followee Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setFollowee($followee)
    {
        $this->followee = $followee;
        return $this;
    }

}
