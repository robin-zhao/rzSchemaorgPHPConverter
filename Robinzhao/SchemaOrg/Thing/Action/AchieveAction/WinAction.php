<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\AchieveAction;

use Robinzhao\SchemaOrg\Thing\Action\AchieveAction;

/**
 * Win Action
 * http://schema.org/WinAction
 */
class WinAction extends AchieveAction
{

    /**
     * A sub property of participant. The loser of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $loser;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/WinAction";

    /**
     * @param $loser Robinzhao\SchemaOrg\Thing\Person
     */
    public function addLoser($loser)
    {
        $this->loser []= $loser;
        return $this;
    }

}
