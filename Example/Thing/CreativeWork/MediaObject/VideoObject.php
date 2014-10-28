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
    protected $caption;

    /**
     * Thumbnail image for an image or video.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    protected $thumbnail;

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     * @var String
     */
    protected $transcript;

    /**
     * The frame size of the video.
     *
     * @var String
     */
    protected $videoFrameSize;

    /**
     * The quality of the video.
     *
     * @var String
     */
    protected $videoQuality;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/VideoObject";

    /**
     * @return String
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param $caption String
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param $thumbnail Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return String
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param $transcript String
     */
    public function setTranscript($transcript)
    {
        $this->transcript = $transcript;
        return $this;
    }

    /**
     * @return String
     */
    public function getVideoFrameSize()
    {
        return $this->videoFrameSize;
    }

    /**
     * @param $videoFrameSize String
     */
    public function setVideoFrameSize($videoFrameSize)
    {
        $this->videoFrameSize = $videoFrameSize;
        return $this;
    }

    /**
     * @return String
     */
    public function getVideoQuality()
    {
        return $this->videoQuality;
    }

    /**
     * @param $videoQuality String
     */
    public function setVideoQuality($videoQuality)
    {
        $this->videoQuality = $videoQuality;
        return $this;
    }

}
