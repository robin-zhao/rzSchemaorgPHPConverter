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
     * Position of the episode within an ordered group of episodes.
     *
     * @var Integer
     */
    public $episodeNumber;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public $musicBy;

    /**
     * The season to which this episode belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public $partOfSeason;

    /**
     * The series to which this episode or season belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Series
     */
    public $partOfSeries;

    /**
     * Free text to define other than pure numerical ranking of an episode or a season in an ordered list of items (further formatting restrictions may apply within particular user groups).
     *
     * @var String
     */
    public $position;

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
     * A publication event associated with the episode, clip or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public $publication;

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
    public $context = "http://schema.org/Episode";

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
     * @param $episodeNumber Integer
     */
    public function addEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber []= $episodeNumber;
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
     * @param $partOfSeason Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function addPartOfSeason($partOfSeason)
    {
        $this->partOfSeason []= $partOfSeason;
        return $this;
    }

    /**
     * @param $partOfSeries Robinzhao\SchemaOrg\Thing\CreativeWork\Series
     */
    public function addPartOfSeries($partOfSeries)
    {
        $this->partOfSeries []= $partOfSeries;
        return $this;
    }

    /**
     * @param $position String
     */
    public function addPosition($position)
    {
        $this->position []= $position;
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
     * @param $publication Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public function addPublication($publication)
    {
        $this->publication []= $publication;
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
