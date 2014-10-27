<?php

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
     * @var ImageObject
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

    public function getcaption()
    {
        return $this->caption;
    }

    public function setcaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    public function getthumbnail()
    {
        return $this->thumbnail;
    }

    public function setthumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function gettranscript()
    {
        return $this->transcript;
    }

    public function settranscript($transcript)
    {
        $this->transcript = $transcript;
        return $this;
    }

    public function getvideoFrameSize()
    {
        return $this->videoFrameSize;
    }

    public function setvideoFrameSize($videoFrameSize)
    {
        $this->videoFrameSize = $videoFrameSize;
        return $this;
    }

    public function getvideoQuality()
    {
        return $this->videoQuality;
    }

    public function setvideoQuality($videoQuality)
    {
        $this->videoQuality = $videoQuality;
        return $this;
    }

}