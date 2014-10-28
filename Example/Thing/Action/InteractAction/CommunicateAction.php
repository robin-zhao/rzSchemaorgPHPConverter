<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing
     */
    private $about;

    /**
     * A sub property of instrument. The languaged used on this action.
     *
     * @var Example\Thing\Intangible\Language
     */
    private $language;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Example\Thing\Organization|Example\Thing\Intangible\Audience|Example\Thing\Person
     */
    private $recipient;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/CommunicateAction";

    /**
     * @return Example\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param $about Example\Thing
     */
    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language Example\Thing\Intangible\Language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Intangible\Audience|Example\Thing\Person
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param $recipient Example\Thing\Organization|Example\Thing\Intangible\Audience|Example\Thing\Person
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

}
