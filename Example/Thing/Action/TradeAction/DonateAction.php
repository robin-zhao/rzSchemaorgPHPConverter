<?php

namespace Example\Thing\Action\TradeAction;

use Example\Thing\Action\TradeAction;

/**
 * Donate Action
 * http://schema.org/DonateAction
 */
class DonateAction extends TradeAction
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
    private $url = "http://schema.org/DonateAction";

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
