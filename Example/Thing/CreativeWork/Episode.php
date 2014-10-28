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

    /**
     * @return Example\Thing\Person
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param $actor Example\Thing\Person
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * @return Example\Thing\Person
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param $actors Example\Thing\Person
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
        return $this;
    }

    /**
     * @return Example\Thing\Person
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param $director Example\Thing\Person
     */
    public function setDirector($director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return Example\Thing\Person
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param $directors Example\Thing\Person
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
     * @return Example\Thing\Person|Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param $musicBy Example\Thing\Person|Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function setMusicBy($musicBy)
    {
        $this->musicBy = $musicBy;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Season
     */
    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    /**
     * @param $partOfSeason Example\Thing\CreativeWork\Season
     */
    public function setPartOfSeason($partOfSeason)
    {
        $this->partOfSeason = $partOfSeason;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Series
     */
    public function getPartOfSeries()
    {
        return $this->partOfSeries;
    }

    /**
     * @param $partOfSeries Example\Thing\CreativeWork\Series
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
     * @return Example\Thing\Person
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @param $producer Example\Thing\Person
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param $productionCompany Example\Thing\Organization
     */
    public function setProductionCompany($productionCompany)
    {
        $this->productionCompany = $productionCompany;
        return $this;
    }

    /**
     * @return Example\Thing\Event\PublicationEvent
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param $publication Example\Thing\Event\PublicationEvent
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param $trailer Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
        return $this;
    }

}
