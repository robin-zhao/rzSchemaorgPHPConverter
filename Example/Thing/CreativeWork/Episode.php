<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getActor()
    {
        return $this->actor;
    }

    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function setActors($actors)
    {
        $this->actors = $actors;
        return $this;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function setDirector($director)
    {
        $this->director = $director;
        return $this;
    }

    public function getDirectors()
    {
        return $this->directors;
    }

    public function setDirectors($directors)
    {
        $this->directors = $directors;
        return $this;
    }

    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
        return $this;
    }

    public function getMusicBy()
    {
        return $this->musicBy;
    }

    public function setMusicBy($musicBy)
    {
        $this->musicBy = $musicBy;
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

    public function getProducer()
    {
        return $this->producer;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;
        return $this;
    }

    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    public function setProductionCompany($productionCompany)
    {
        $this->productionCompany = $productionCompany;
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

    public function getTrailer()
    {
        return $this->trailer;
    }

    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
        return $this;
    }

}
