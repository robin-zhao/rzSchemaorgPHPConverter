<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\AchieveAction;

use Robinzhao\SchemaOrg\Thing\Action\AchieveAction;

/**
 * Lose Action
 * http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction
{

    /**
     * A sub property of participant. The winner of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $winner;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/LoseAction";

    /**
     * @param $winner Robinzhao\SchemaOrg\Thing\Person
     */
    public function addWinner($winner)
    {
        $this->winner []= $winner;
        return $this;
    }

}
