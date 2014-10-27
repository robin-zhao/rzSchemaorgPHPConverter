<?php

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
     * @var Episode
     */
    private $partOfEpisode;

    /**
     * The season to which this episode belongs.
     *
     * @var Season
     */
    private $partOfSeason;

    /**
     * The series to which this episode or season belongs.
     *
     * @var Series
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
     * @var PublicationEvent
     */
    private $publication;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Clip";

    public function getclipNumber()
    {
        return $this->clipNumber;
    }

    public function setclipNumber($clipNumber)
    {
        $this->clipNumber = $clipNumber;
        return $this;
    }

    public function getpartOfEpisode()
    {
        return $this->partOfEpisode;
    }

    public function setpartOfEpisode($partOfEpisode)
    {
        $this->partOfEpisode = $partOfEpisode;
        return $this;
    }

    public function getpartOfSeason()
    {
        return $this->partOfSeason;
    }

    public function setpartOfSeason($partOfSeason)
    {
        $this->partOfSeason = $partOfSeason;
        return $this;
    }

    public function getpartOfSeries()
    {
        return $this->partOfSeries;
    }

    public function setpartOfSeries($partOfSeries)
    {
        $this->partOfSeries = $partOfSeries;
        return $this;
    }

    public function getposition()
    {
        return $this->position;
    }

    public function setposition($position)
    {
        $this->position = $position;
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

}
