<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Movie
 * http://schema.org/Movie
 */
class Movie extends CreativeWork
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
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    protected $duration;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    protected $musicBy;

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
     * The trailer of a movie or tv/radio series, season, or episode.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    protected $trailer;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Movie";

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
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
