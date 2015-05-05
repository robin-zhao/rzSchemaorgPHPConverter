<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Event\UserInteraction;

use Robinzhao\SchemaOrg\Thing\Event\UserInteraction;

/**
 * User Comments
 * http://schema.org/UserComments
 */
class UserComments extends UserInteraction
{

    /**
     * The text of the UserComment.
     *
     * @var String
     */
    public $commentText;

    /**
     * The time at which the UserComment was made.
     *
     * @var DateTime
     */
    public $commentTime;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $creator;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork
     */
    public $discusses;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     * @var String
     */
    public $replyToUrl;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/UserComments";

    /**
     * @param $commentText String
     */
    public function addCommentText($commentText)
    {
        $this->commentText []= $commentText;
        return $this;
    }

    /**
     * @param $commentTime DateTime
     */
    public function addCommentTime($commentTime)
    {
        $this->commentTime []= $commentTime;
        return $this;
    }

    /**
     * @param $creator Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addCreator($creator)
    {
        $this->creator []= $creator;
        return $this;
    }

    /**
     * @param $discusses Robinzhao\SchemaOrg\Thing\CreativeWork
     */
    public function addDiscusses($discusses)
    {
        $this->discusses []= $discusses;
        return $this;
    }

    /**
     * @param $replyToUrl String
     */
    public function addReplyToUrl($replyToUrl)
    {
        $this->replyToUrl []= $replyToUrl;
        return $this;
    }

}
