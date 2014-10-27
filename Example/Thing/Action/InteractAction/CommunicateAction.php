<?php

namespace Example\Thing\Action\InteractAction;

use Example\Thing\Action\InteractAction;

/**
 * Communicate Action
 * http://schema.org/CommunicateAction
 */
class CommunicateAction extends InteractAction
{

    /**
     * The subject matter of the content.
     *
     * @var Thing
     */
    private $about;

    /**
     * A sub property of instrument. The languaged used on this action.
     *
     * @var Language
     */
    private $language;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Organization|Audience|Person
     */
    private $recipient;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/CommunicateAction";

    public function getabout()
    {
        return $this->about;
    }

    public function setabout($about)
    {
        $this->about = $about;
        return $this;
    }

    public function getlanguage()
    {
        return $this->language;
    }

    public function setlanguage($language)
    {
        $this->language = $language;
        return $this;
    }

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
