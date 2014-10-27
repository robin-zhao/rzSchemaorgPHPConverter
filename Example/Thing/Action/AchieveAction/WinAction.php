<?php

namespace Example\Thing\Action\AchieveAction;

use Example\Thing\Action\AchieveAction;

/**
 * Win Action
 * http://schema.org/WinAction
 */
class WinAction extends AchieveAction
{

    /**
     * A sub property of participant. The loser of the action.
     *
     * @var Person
     */
    private $loser;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/WinAction";

    public function getloser()
    {
        return $this->loser;
    }

    public function setloser($loser)
    {
        $this->loser = $loser;
        return $this;
    }

}
