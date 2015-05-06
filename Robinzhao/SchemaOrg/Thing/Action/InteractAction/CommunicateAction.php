<?php
/**
 * This is an auto generated file.
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
    public $about;

    /**
     * A sub property of instrument. The languaged used on this action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public $language;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public $recipient;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/CommunicateAction";

    /**
     * @param $about Robinzhao\SchemaOrg\Thing
     */
    public function addAbout($about)
    {
        $this->about []= $about;
        return $this;
    }

    /**
     * @param $language Robinzhao\SchemaOrg\Thing\Intangible\Language
     */
    public function addLanguage($language)
    {
        $this->language []= $language;
        return $this;
    }

    /**
     * @param $recipient Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Intangible\Audience|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addRecipient($recipient)
    {
        $this->recipient []= $recipient;
        return $this;
    }


}