<?php
/**
 * This is an auto generated file.
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
    public $actor;

    /**
     * A cast member of the movie, tv/radio series, season, episode, or video. (legacy spelling; see singular form, actor)
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $actors;

    /**
     * The director of the movie, tv/radio episode or series.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $director;

    /**
     * The director of the movie, tv/radio episode or series. (legacy spelling; see singular form, director)
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $directors;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public $musicBy;

    /**
     * The producer of the movie, tv/radio series, season, or episode, or video.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $producer;

    /**
     * The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $productionCompany;

    /**
     * The trailer of a movie or tv/radio series, season, or episode.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public $trailer;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Movie";

    /**
     * @param $actor Robinzhao\SchemaOrg\Thing\Person
     */
    public function addActor($actor)
    {
        $this->actor []= $actor;
        return $this;
    }

    /**
     * @param $actors Robinzhao\SchemaOrg\Thing\Person
     */
    public function addActors($actors)
    {
        $this->actors []= $actors;
        return $this;
    }

    /**
     * @param $director Robinzhao\SchemaOrg\Thing\Person
     */
    public function addDirector($director)
    {
        $this->director []= $director;
        return $this;
    }

    /**
     * @param $directors Robinzhao\SchemaOrg\Thing\Person
     */
    public function addDirectors($directors)
    {
        $this->directors []= $directors;
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
     * @param $musicBy Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function addMusicBy($musicBy)
    {
        $this->musicBy []= $musicBy;
        return $this;
    }

    /**
     * @param $producer Robinzhao\SchemaOrg\Thing\Person
     */
    public function addProducer($producer)
    {
        $this->producer []= $producer;
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
     * @param $trailer Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject
     */
    public function addTrailer($trailer)
    {
        $this->trailer []= $trailer;
        return $this;
    }


}