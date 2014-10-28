<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getCaption()
    {
        return $this->caption;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    public function getExifData()
    {
        return $this->exifData;
    }

    public function setExifData($exifData)
    {
        $this->exifData = $exifData;
        return $this;
    }

    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    public function setRepresentativeOfPage($representativeOfPage)
    {
        $this->representativeOfPage = $representativeOfPage;
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

}
