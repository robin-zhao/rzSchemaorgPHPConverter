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
    private $winner;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/LoseAction";

    public function getwinner()
    {
        return $this->winner;
    }

    public function setwinner($winner)
    {
        $this->winner = $winner;
        return $this;
    }

}
