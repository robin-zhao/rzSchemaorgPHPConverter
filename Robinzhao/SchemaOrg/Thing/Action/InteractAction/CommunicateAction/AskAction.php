<?php
/**
 * This is an auto generated file.
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
    public $question;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AskAction";

    /**
     * @param $question String
     */
    public function addQuestion($question)
    {
        $this->question []= $question;
        return $this;
    }


}