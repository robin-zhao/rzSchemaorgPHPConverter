<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\TradeAction;

use Example\Thing\Action\TradeAction;

/**
 * Pay Action
 * http://schema.org/PayAction
 */
class PayAction extends TradeAction
{

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    private $purpose;

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     * @var Example\Thing\Organization|Example\Thing\Intangible\Audience|Example\Thing\Person
     */
    private $recipient;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PayAction";

    public function getPurpose()
    {
        return $this->purpose;
    }

    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    public function getRecipient()
    {
        return $this->recipient;
    }

    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

}
