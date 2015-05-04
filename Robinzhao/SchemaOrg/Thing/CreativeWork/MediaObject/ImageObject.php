<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject;

use Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject;

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
    protected $caption;

    /**
     * exif data for this object.
     *
     * @var String
     */
    protected $exifData;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @var Boolean
     */
    protected $representativeOfPage;

    /**
     * Thumbnail image for an image or video.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    protected $thumbnail;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ImageObject";

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
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param $thumbnail Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

}
