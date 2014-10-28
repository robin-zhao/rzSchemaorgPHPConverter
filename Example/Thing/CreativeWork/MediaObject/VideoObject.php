<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\MediaObject;

use Example\Thing\CreativeWork\MediaObject;

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
    private $caption;

    /**
     * Thumbnail image for an image or video.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $thumbnail;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     * @var String
     */
    private $transcript;

    /**
     * The frame size of the video.
     *
     * @var String
     */
    private $videoFrameSize;

    /**
     * The quality of the video.
     *
     * @var String
     */
    private $videoQuality;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/VideoObject";

    public function getCaption()
    {
        return $this->caption;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function getTranscript()
    {
        return $this->transcript;
    }

    public function setTranscript($transcript)
    {
        $this->transcript = $transcript;
        return $this;
    }

    public function getVideoFrameSize()
    {
        return $this->videoFrameSize;
    }

    public function setVideoFrameSize($videoFrameSize)
    {
        $this->videoFrameSize = $videoFrameSize;
        return $this;
    }

    public function getVideoQuality()
    {
        return $this->videoQuality;
    }

    public function setVideoQuality($videoQuality)
    {
        $this->videoQuality = $videoQuality;
        return $this;
    }

}
