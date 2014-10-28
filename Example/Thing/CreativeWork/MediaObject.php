<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Media Object
 * http://schema.org/MediaObject
 */
class MediaObject extends CreativeWork
{

    /**
     * A NewsArticle associated with the Media Object.
     *
     * @var Example\Thing\CreativeWork\Article\NewsArticle
     */
    private $associatedArticle;

    /**
     * The bitrate of the media object.
     *
     * @var String
     */
    private $bitrate;

    /**
     * File size in (mega/kilo) bytes.
     *
     * @var String
     */
    private $contentSize;

    /**
     * Actual bytes of the media object, for example the image file or video file. (previous spelling: contentURL)
     *
     * @var String
     */
    private $contentUrl;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $duration;

    /**
     * A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag. (previous spelling: embedURL)
     *
     * @var String
     */
    private $embedUrl;

    /**
     * The creative work encoded by this media object
     *
     * @var Example\Thing\CreativeWork
     */
    private $encodesCreativeWork;

    /**
     * mp3, mpeg4, etc.
     *
     * @var String
     */
    private $encodingFormat;

    /**
     * Date the content expires and is no longer useful or available. Useful for videos.
     *
     * @var DateTime
     */
    private $expires;

    /**
     * The height of the item.
     *
     * @var Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $height;

    /**
     * Player type required—for example, Flash or Silverlight.
     *
     * @var String
     */
    private $playerType;

    /**
     * The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
     *
     * @var Example\Thing\Organization
     */
    private $productionCompany;

    /**
     * A publication event associated with the episode, clip or media object.
     *
     * @var Example\Thing\Event\PublicationEvent
     */
    private $publication;

    /**
     * The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
     *
     * @var Example\Thing\Place
     */
    private $regionsAllowed;

    /**
     * Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
     *
     * @var Boolean
     */
    private $requiresSubscription;

    /**
     * Date when this media object was uploaded to this site.
     *
     * @var DateTime
     */
    private $uploadDate;

    /**
     * The width of the item.
     *
     * @var Example\Thing\Intangible\Quantity\Distance|Example\Thing\Intangible\StructuredValue\QuantitativeValue
     */
    private $width;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MediaObject";

    public function getassociatedArticle()
    {
        return $this->associatedArticle;
    }

    public function setassociatedArticle($associatedArticle)
    {
        $this->associatedArticle = $associatedArticle;
        return $this;
    }

    public function getbitrate()
    {
        return $this->bitrate;
    }

    public function setbitrate($bitrate)
    {
        $this->bitrate = $bitrate;
        return $this;
    }

    public function getcontentSize()
    {
        return $this->contentSize;
    }

    public function setcontentSize($contentSize)
    {
        $this->contentSize = $contentSize;
        return $this;
    }

    public function getcontentUrl()
    {
        return $this->contentUrl;
    }

    public function setcontentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    public function getduration()
    {
        return $this->duration;
    }

    public function setduration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function getembedUrl()
    {
        return $this->embedUrl;
    }

    public function setembedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
        return $this;
    }

    public function getencodesCreativeWork()
    {
        return $this->encodesCreativeWork;
    }

    public function setencodesCreativeWork($encodesCreativeWork)
    {
        $this->encodesCreativeWork = $encodesCreativeWork;
        return $this;
    }

    public function getencodingFormat()
    {
        return $this->encodingFormat;
    }

    public function setencodingFormat($encodingFormat)
    {
        $this->encodingFormat = $encodingFormat;
        return $this;
    }

    public function getexpires()
    {
        return $this->expires;
    }

    public function setexpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    public function getheight()
    {
        return $this->height;
    }

    public function setheight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getplayerType()
    {
        return $this->playerType;
    }

    public function setplayerType($playerType)
    {
        $this->playerType = $playerType;
        return $this;
    }

    public function getproductionCompany()
    {
        return $this->productionCompany;
    }

    public function setproductionCompany($productionCompany)
    {
        $this->productionCompany = $productionCompany;
        return $this;
    }

    public function getpublication()
    {
        return $this->publication;
    }

    public function setpublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

    public function getregionsAllowed()
    {
        return $this->regionsAllowed;
    }

    public function setregionsAllowed($regionsAllowed)
    {
        $this->regionsAllowed = $regionsAllowed;
        return $this;
    }

    public function getrequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    public function setrequiresSubscription($requiresSubscription)
    {
        $this->requiresSubscription = $requiresSubscription;
        return $this;
    }

    public function getuploadDate()
    {
        return $this->uploadDate;
    }

    public function setuploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;
        return $this;
    }

    public function getwidth()
    {
        return $this->width;
    }

    public function setwidth($width)
    {
        $this->width = $width;
        return $this;
    }

}
