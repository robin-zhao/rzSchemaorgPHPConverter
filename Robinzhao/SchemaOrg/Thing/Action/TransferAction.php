<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action;

use Robinzhao\SchemaOrg\Thing\Action;

/**
 * Transfer Action
 * http://schema.org/TransferAction
 */
class TransferAction extends Action
{

    /**
     * A sub property of location. The original location of the object or the agent before the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent after the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public $toLocation;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/TransferAction";

    /**
     * @param $fromLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addFromLocation($fromLocation)
    {
        $this->fromLocation []= $fromLocation;
        return $this;
    }

    /**
     * @param $toLocation Robinzhao\SchemaOrg\Thing\Place|Float
     */
    public function addToLocation($toLocation)
    {
        $this->toLocation []= $toLocation;
        return $this;
    }

}
