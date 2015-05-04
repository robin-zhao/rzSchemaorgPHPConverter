<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\InteractAction;

use Robinzhao\SchemaOrg\Thing\Action\InteractAction;

/**
 * Communicate Action
 * http://schema.org/CommunicateAction
 */
class CommunicateAction extends InteractAction
{

    /**
     * The subject matter of the content.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    protected $about;

    /**
     * A sub property of instrument. The languaged used on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    protected $language;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    protected $recipient;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/CommunicateAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param $about Robinzhao\SchemaOrg\Thing
     */
    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $language Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param $recipient Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

}
