<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Episode
 * http://schema.org/Episode
 */
class Episode extends CreativeWork
{

    /**
     * A cast member of the movie, tv/radio series, season, episode, or video.
     *
     * @var Example\Thing\Person
     */
    private $actor;

    /**
     * A cast member of the movie, tv/radio series, season, episode, or video. (legacy spelling; see singular form, actor)
     *
     * @var Example\Thing\Person
     */
    private $actors;

    /**
     * The director of the movie, tv/radio episode or series.
     *
     * @var Example\Thing\Person
     */
    private $director;

    /**
     * The director of the movie, tv/radio episode or series. (legacy spelling; see singular form, director)
     *
     * @var Example\Thing\Person
     */
    private $directors;

    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @var Integer
     */
    private $episodeNumber;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Example\Thing\Person|Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    private $musicBy;

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
     * The producer of the movie, tv/radio series, season, or episode, or video.
     *
     * @var Example\Thing\Person
     */
    private $producer;

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
     * The trailer of a movie or tv/radio series, season, or episode.
     *
     * @var Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    private $trailer;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Episode";

    public function getactor()
    {
        return $this->actor;
    }

    public function setactor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    public function getactors()
    {
        return $this->actors;
    }

    public function setactors($actors)
    {
        $this->actors = $actors;
        return $this;
    }

    public function getdirector()
    {
        return $this->director;
    }

    public function setdirector($director)
    {
        $this->director = $director;
        return $this;
    }

    public function getdirectors()
    {
        return $this->directors;
    }

    public function setdirectors($directors)
    {
        $this->directors = $directors;
        return $this;
    }

    public function getepisodeNumber()
    {
        return $this->episodeNumber;
    }

    public function setepisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
        return $this;
    }

    public function getmusicBy()
    {
        return $this->musicBy;
    }

    public function setmusicBy($musicBy)
    {
        $this->musicBy = $musicBy;
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

    public function getproducer()
    {
        return $this->producer;
    }

    public function setproducer($producer)
    {
        $this->producer = $producer;
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

    public function gettrailer()
    {
        return $this->trailer;
    }

    public function settrailer($trailer)
    {
        $this->trailer = $trailer;
        return $this;
    }

}
