<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\Organization|Example\Thing\Intangible\Audience|Example\Thing\Person
     */
    private $recipient;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/DonateAction";

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
