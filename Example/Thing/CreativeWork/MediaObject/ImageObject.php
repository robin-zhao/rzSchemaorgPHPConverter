<?php

namespace Example\Thing\CreativeWork\MediaObject;

use Example\Thing\CreativeWork\MediaObject;

/**
 * Image Object
 * http://schema.org/ImageObject
 */
class ImageObject extends MediaObject
{

    /**
     * The caption for this object.
     *
     * @var String
     */
    private $caption;

    /**
     * exif data for this object.
     *
     * @var String
     */
    private $exifData;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @var Boolean
     */
    private $representativeOfPage;

    /**
     * Thumbnail image for an image or video.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $thumbnail;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ImageObject";

    public function getcaption()
    {
        return $this->caption;
    }

    public function setcaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    public function getexifData()
    {
        return $this->exifData;
    }

    public function setexifData($exifData)
    {
        $this->exifData = $exifData;
        return $this;
    }

    public function getrepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    public function setrepresentativeOfPage($representativeOfPage)
    {
        $this->representativeOfPage = $representativeOfPage;
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

}
