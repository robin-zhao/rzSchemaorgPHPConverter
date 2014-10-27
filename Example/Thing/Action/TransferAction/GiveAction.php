<?php

namespace Example\Thing\Action\TransferAction;

use Example\Thing\Action\TransferAction;

/**
 * Give Action
 * http://schema.org/GiveAction
 */
class GiveAction extends TransferAction
{

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Organization|Audience|Person
     */
    private $recipient;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/GiveAction";

    public function getrecipient()
    {
        return $this->recipient;
    }

    public function setrecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

}
