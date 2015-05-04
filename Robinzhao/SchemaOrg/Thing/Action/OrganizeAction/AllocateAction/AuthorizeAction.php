<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

use Robinzhao\SchemaOrg\Thing\Action\OrganizeAction\AllocateAction;

/**
 * Authorize Action
 * http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction
{

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
    protected $context = "http://schema.org/AuthorizeAction";

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
