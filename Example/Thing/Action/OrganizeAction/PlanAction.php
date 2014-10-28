<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\OrganizeAction;

use Example\Thing\Action\OrganizeAction;

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
    protected $scheduledTime;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PlanAction";

    /**
     * @return DateTime
     */
    public function getScheduledTime()
    {
        return $this->scheduledTime;
    }

    /**
     * @param $scheduledTime DateTime
     */
    public function setScheduledTime($scheduledTime)
    {
        $this->scheduledTime = $scheduledTime;
        return $this;
    }

}
