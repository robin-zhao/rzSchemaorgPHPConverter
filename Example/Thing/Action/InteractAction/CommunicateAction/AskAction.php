<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\InteractAction\CommunicateAction;

use Example\Thing\Action\InteractAction\CommunicateAction;

/**
 * Ask Action
 * http://schema.org/AskAction
 */
class AskAction extends CommunicateAction
{

    /**
     * A sub property of object. A question.
     *
     * @var String
     */
    private $question;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AskAction";

    public function getquestion()
    {
        return $this->question;
    }

    public function setquestion($question)
    {
        $this->question = $question;
        return $this;
    }

}
