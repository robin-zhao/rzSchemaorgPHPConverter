<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Robinzhao\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

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
    protected $question;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/AskAction";

    /**
     * @return String
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param $question String
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

}
