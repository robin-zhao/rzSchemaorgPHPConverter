<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Action\OrganizeAction;

use Robinzhao\SchemaOrg\Thing\Action\OrganizeAction;

/**
 * Plan Action
 * http://schema.org/PlanAction
 */
class PlanAction extends OrganizeAction
{

    /**
     * The time the object is scheduled to.
     *
     * @var DateTime
     */
    public $scheduledTime;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PlanAction";

    /**
     * @param $scheduledTime DateTime
     */
    public function addScheduledTime($scheduledTime)
    {
        $this->scheduledTime []= $scheduledTime;
        return $this;
    }


}