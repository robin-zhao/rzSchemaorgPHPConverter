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
     * @return String
     */
    public function getExifData()
    {
        return $this->exifData;
    }

    /**
     * @param $exifData String
     */
    public function setExifData($exifData)
    {
        $this->exifData = $exifData;
        return $this;
    }

    /**
     * @return Boolean
     */
    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    /**
     * @param $representativeOfPage Boolean
     */
    public function setRepresentativeOfPage($representativeOfPage)
    {
        $this->representativeOfPage = $representativeOfPage;
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

}
