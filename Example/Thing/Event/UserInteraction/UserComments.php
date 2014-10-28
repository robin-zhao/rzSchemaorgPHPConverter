<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Event\UserInteraction;

use Example\Thing\Event\UserInteraction;

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
    private $commentText;

    /**
     * The time at which the UserComment was made.
     *
     * @var DateTime
     */
    private $commentTime;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $creator;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     * @var Example\Thing\CreativeWork
     */
    private $discusses;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     * @var String
     */
    private $replyToUrl;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/UserComments";

    public function getcommentText()
    {
        return $this->commentText;
    }

    public function setcommentText($commentText)
    {
        $this->commentText = $commentText;
        return $this;
    }

    public function getcommentTime()
    {
        return $this->commentTime;
    }

    public function setcommentTime($commentTime)
    {
        $this->commentTime = $commentTime;
        return $this;
    }

    public function getcreator()
    {
        return $this->creator;
    }

    public function setcreator($creator)
    {
        $this->creator = $creator;
        return $this;
    }

    public function getdiscusses()
    {
        return $this->discusses;
    }

    public function setdiscusses($discusses)
    {
        $this->discusses = $discusses;
        return $this;
    }

    public function getreplyToUrl()
    {
        return $this->replyToUrl;
    }

    public function setreplyToUrl($replyToUrl)
    {
        $this->replyToUrl = $replyToUrl;
        return $this;
    }

}
