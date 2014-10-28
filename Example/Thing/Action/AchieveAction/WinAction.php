<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Person
     */
    protected $loser;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/WinAction";

    /**
     * @return Example\Thing\Person
     */
    public function getLoser()
    {
        return $this->loser;
    }

    /**
     * @param $loser Example\Thing\Person
     */
    public function setLoser($loser)
    {
        $this->loser = $loser;
        return $this;
    }

}
