<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\TransferAction;

use Example\Thing\Action\TransferAction;

/**
 * Return Action
 * http://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction
{

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Example\Thing\Organization|Example\Thing\Intangible\Audience|Example\Thing\Person
     */
    protected $recipient;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ReturnAction";

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
