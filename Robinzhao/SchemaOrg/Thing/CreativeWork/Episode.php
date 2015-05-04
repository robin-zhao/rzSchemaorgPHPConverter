<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Episode
 * http://schema.org/Episode
 */
class Episode extends CreativeWork
{

    /**
     * A cast member of the movie, tv/radio series, season, episode, or video.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $actor;

    /**
     * A cast member of the movie, tv/radio series, season, episode, or video. (legacy spelling; see singular form, actor)
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $actors;

    /**
     * The director of the movie, tv/radio episode or series.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $director;

    /**
     * The director of the movie, tv/radio episode or series. (legacy spelling; see singular form, director)
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $directors;

    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @var Integer
     */
    protected $episodeNumber;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    protected $musicBy;

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
     * The producer of the movie, tv/radio series, season, or episode, or video.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $producer;

    /**
     * The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $productionCompany;

    /**
     * A publication event associated with the episode, clip or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    protected $publication;

    /**
     * The trailer of a movie or tv/radio series, season, or episode.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    protected $trailer;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Episode";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param $actor Robinzhao\SchemaOrg\Thing\Person
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param $actors Robinzhao\SchemaOrg\Thing\Person
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param $director Robinzhao\SchemaOrg\Thing\Person
     */
    public function setDirector($director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param $directors Robinzhao\SchemaOrg\Thing\Person
     */
    public function setDirectors($directors)
    {
        $this->directors = $directors;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    /**
     * @param $episodeNumber Integer
     */
    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param $musicBy Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function setMusicBy($musicBy)
    {
        $this->musicBy = $musicBy;
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
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @param $producer Robinzhao\SchemaOrg\Thing\Person
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param $productionCompany Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setProductionCompany($productionCompany)
    {
        $this->productionCompany = $productionCompany;
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

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param $trailer Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
        return $this;
    }

}
