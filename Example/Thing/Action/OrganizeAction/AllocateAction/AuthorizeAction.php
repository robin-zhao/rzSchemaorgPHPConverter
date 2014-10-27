<?php

namespace Example\Thing\Action\OrganizeAction\AllocateAction;

use Example\Thing\Action\OrganizeAction\AllocateAction;

/**
 * Authorize Action
 * http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction
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
    private $url = "http://schema.org/AuthorizeAction";

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
