<?php
/**
 * This is an auto generated file.
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
    public $caption;

    /**
     * exif data for this object.
     *
     * @var String
     */
    public $exifData;

    /**
     * Indicates whether this image is representative of the content of the page.
     *
     * @var Boolean
     */
    public $representativeOfPage;

    /**
     * Thumbnail image for an image or video.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $thumbnail;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ImageObject";

    /**
     * @param $caption String
     */
    public function addCaption($caption)
    {
        $this->caption []= $caption;
        return $this;
    }

    /**
     * @param $exifData String
     */
    public function addExifData($exifData)
    {
        $this->exifData []= $exifData;
        return $this;
    }

    /**
     * @param $representativeOfPage Boolean
     */
    public function addRepresentativeOfPage($representativeOfPage)
    {
        $this->representativeOfPage []= $representativeOfPage;
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


}