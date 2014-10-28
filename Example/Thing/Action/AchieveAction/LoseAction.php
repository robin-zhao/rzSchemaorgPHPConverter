<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\AchieveAction;

use Example\Thing\Action\AchieveAction;

/**
 * Lose Action
 * http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction
{

    /**
     * A sub property of participant. The winner of the action.
     *
     * @var Example\Thing\Person
     */
    protected $winner;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/LoseAction";

    /**
     * @return Example\Thing\Person
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param $winner Example\Thing\Person
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
        return $this;
    }

}
