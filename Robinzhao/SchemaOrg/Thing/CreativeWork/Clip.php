<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Clip
 * http://schema.org/Clip
 */
class Clip extends CreativeWork
{

    /**
     * Position of the clip within an ordered group of clips.
     *
     * @var Integer
     */
    protected $clipNumber;

    /**
     * The episode to which this clip belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    protected $partOfEpisode;

    /**
     * The season to which this episode belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    protected $partOfSeason;

    /**
     * The series to which this episode or season belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Series
     */
    protected $partOfSeries;

    /**
     * Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
     *
     * @var String
     */
    protected $position;

    /**
     * A publication event associated with the episode, clip or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    protected $publication;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Clip";

    /**
     * @return Integer
     */
    public function getClipNumber()
    {
        return $this->clipNumber;
    }

    /**
     * @param $clipNumber Integer
     */
    public function setClipNumber($clipNumber)
    {
        $this->clipNumber = $clipNumber;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function getPartOfEpisode()
    {
        return $this->partOfEpisode;
    }

    /**
     * @param $partOfEpisode Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function setPartOfEpisode($partOfEpisode)
    {
        $this->partOfEpisode = $partOfEpisode;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    /**
     * @param $partOfSeason Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function setPartOfSeason($partOfSeason)
    {
        $this->partOfSeason = $partOfSeason;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Series
     */
    public function getPartOfSeries()
    {
        return $this->partOfSeries;
    }

    /**
     * @param $partOfSeries Robinzhao\SchemaOrg\Thing\CreativeWork\Series
     */
    public function setPartOfSeries($partOfSeries)
    {
        $this->partOfSeries = $partOfSeries;
        return $this;
    }

    /**
     * @return String
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param $position String
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param $publication Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

}
