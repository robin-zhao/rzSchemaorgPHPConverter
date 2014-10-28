<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

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
    private $clipNumber;

    /**
     * The episode to which this clip belongs.
     *
     * @var Example\Thing\CreativeWork\Episode
     */
    private $partOfEpisode;

    /**
     * The season to which this episode belongs.
     *
     * @var Example\Thing\CreativeWork\Season
     */
    private $partOfSeason;

    /**
     * The series to which this episode or season belongs.
     *
     * @var Example\Thing\CreativeWork\Series
     */
    private $partOfSeries;

    /**
     * Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
     *
     * @var String
     */
    private $position;

    /**
     * A publication event associated with the episode, clip or media object.
     *
     * @var Example\Thing\Event\PublicationEvent
     */
    private $publication;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Clip";

    public function getClipNumber()
    {
        return $this->clipNumber;
    }

    public function setClipNumber($clipNumber)
    {
        $this->clipNumber = $clipNumber;
        return $this;
    }

    public function getPartOfEpisode()
    {
        return $this->partOfEpisode;
    }

    public function setPartOfEpisode($partOfEpisode)
    {
        $this->partOfEpisode = $partOfEpisode;
        return $this;
    }

    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    public function setPartOfSeason($partOfSeason)
    {
        $this->partOfSeason = $partOfSeason;
        return $this;
    }

    public function getPartOfSeries()
    {
        return $this->partOfSeries;
    }

    public function setPartOfSeries($partOfSeries)
    {
        $this->partOfSeries = $partOfSeries;
        return $this;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    public function getPublication()
    {
        return $this->publication;
    }

    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

}
