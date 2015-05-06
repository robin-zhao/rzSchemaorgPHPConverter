<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Media Object
 * http://schema.org/MediaObject
 */
class MediaObject extends CreativeWork
{

    /**
     * A NewsArticle associated with the Media Object.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Article\NewsArticle
     */
    public $associatedArticle;

    /**
     * The bitrate of the media object.
     *
     * @var String
     */
    public $bitrate;

    /**
     * File size in (mega/kilo) bytes.
     *
     * @var String
     */
    public $contentSize;

    /**
     * Actual bytes of the media object, for example the image file or video file. (previous spelling: contentURL)
     *
     * @var String
     */
    public $contentUrl;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag. (previous spelling: embedURL)
     *
     * @var String
     */
    public $embedUrl;

    /**
     * The creative work encoded by this media object
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork
     */
    public $encodesCreativeWork;

    /**
     * mp3, mpeg4, etc.
     *
     * @var String
     */
    public $encodingFormat;

    /**
     * Date the content expires and is no longer useful or available. Useful for videos.
     *
     * @var DateTime
     */
    public $expires;

    /**
     * The height of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $height;

    /**
     * Player type required—for example, Flash or Silverlight.
     *
     * @var String
     */
    public $playerType;

    /**
     * The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $productionCompany;

    /**
     * A publication event associated with the episode, clip or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public $publication;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Place
     */
    public $regionsAllowed;

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
     *
     * @var Boolean
     */
    public $requiresSubscription;

    /**
     * Date when this media object was uploaded to this site.
     *
     * @var DateTime
     */
    public $uploadDate;

    /**
     * The width of the item.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public $width;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MediaObject";

    /**
     * @param $associatedArticle Robinzhao\SchemaOrg\Thing\CreativeWork\Article\NewsArticle
     */
    public function addAssociatedArticle($associatedArticle)
    {
        $this->associatedArticle []= $associatedArticle;
        return $this;
    }

    /**
     * @param $bitrate String
     */
    public function addBitrate($bitrate)
    {
        $this->bitrate []= $bitrate;
        return $this;
    }

    /**
     * @param $contentSize String
     */
    public function addContentSize($contentSize)
    {
        $this->contentSize []= $contentSize;
        return $this;
    }

    /**
     * @param $contentUrl String
     */
    public function addContentUrl($contentUrl)
    {
        $this->contentUrl []= $contentUrl;
        return $this;
    }

    /**
     * @param $duration Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addDuration($duration)
    {
        $this->duration []= $duration;
        return $this;
    }

    /**
     * @param $embedUrl String
     */
    public function addEmbedUrl($embedUrl)
    {
        $this->embedUrl []= $embedUrl;
        return $this;
    }

    /**
     * @param $encodesCreativeWork Robinzhao\SchemaOrg\Thing\CreativeWork
     */
    public function addEncodesCreativeWork($encodesCreativeWork)
    {
        $this->encodesCreativeWork []= $encodesCreativeWork;
        return $this;
    }

    /**
     * @param $encodingFormat String
     */
    public function addEncodingFormat($encodingFormat)
    {
        $this->encodingFormat []= $encodingFormat;
        return $this;
    }

    /**
     * @param $expires DateTime
     */
    public function addExpires($expires)
    {
        $this->expires []= $expires;
        return $this;
    }

    /**
     * @param $height Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addHeight($height)
    {
        $this->height []= $height;
        return $this;
    }

    /**
     * @param $playerType String
     */
    public function addPlayerType($playerType)
    {
        $this->playerType []= $playerType;
        return $this;
    }

    /**
     * @param $productionCompany Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addProductionCompany($productionCompany)
    {
        $this->productionCompany []= $productionCompany;
        return $this;
    }

    /**
     * @param $publication Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public function addPublication($publication)
    {
        $this->publication []= $publication;
        return $this;
    }

    /**
     * @param $regionsAllowed Robinzhao\SchemaOrg\Thing\Place
     */
    public function addRegionsAllowed($regionsAllowed)
    {
        $this->regionsAllowed []= $regionsAllowed;
        return $this;
    }

    /**
     * @param $requiresSubscription Boolean
     */
    public function addRequiresSubscription($requiresSubscription)
    {
        $this->requiresSubscription []= $requiresSubscription;
        return $this;
    }

    /**
     * @param $uploadDate DateTime
     */
    public function addUploadDate($uploadDate)
    {
        $this->uploadDate []= $uploadDate;
        return $this;
    }

    /**
     * @param $width Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Distance|Robinzhao\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    public function addWidth($width)
    {
        $this->width []= $width;
        return $this;
    }


}