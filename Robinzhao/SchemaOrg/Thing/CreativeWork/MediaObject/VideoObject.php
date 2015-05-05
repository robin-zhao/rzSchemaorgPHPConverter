<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject;

use Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject;

/**
 * Video Object
 * http://schema.org/VideoObject
 */
class VideoObject extends MediaObject
{

    /**
     * The caption for this object.
     *
     * @var String
     */
    public $caption;

    /**
     * Thumbnail image for an image or video.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $thumbnail;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     * @var String
     */
    public $transcript;

    /**
     * The frame size of the video.
     *
     * @var String
     */
    public $videoFrameSize;

    /**
     * The quality of the video.
     *
     * @var String
     */
    public $videoQuality;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/VideoObject";

    /**
     * @param $caption String
     */
    public function addCaption($caption)
    {
        $this->caption []= $caption;
        return $this;
    }

    /**
     * @param $thumbnail Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addThumbnail($thumbnail)
    {
        $this->thumbnail []= $thumbnail;
        return $this;
    }

    /**
     * @param $transcript String
     */
    public function addTranscript($transcript)
    {
        $this->transcript []= $transcript;
        return $this;
    }

    /**
     * @param $videoFrameSize String
     */
    public function addVideoFrameSize($videoFrameSize)
    {
        $this->videoFrameSize []= $videoFrameSize;
        return $this;
    }

    /**
     * @param $videoQuality String
     */
    public function addVideoQuality($videoQuality)
    {
        $this->videoQuality []= $videoQuality;
        return $this;
    }

}
