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
    private $scheduledTime;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PlanAction";

    public function getscheduledTime()
    {
        return $this->scheduledTime;
    }

    public function setscheduledTime($scheduledTime)
    {
        $this->scheduledTime = $scheduledTime;
        return $this;
    }

}
