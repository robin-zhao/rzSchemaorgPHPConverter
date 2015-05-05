<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Series
 * http://schema.org/Series
 */
class Series extends CreativeWork
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
     * The end date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    public $endDate;

    /**
     * An episode of a TV/radio series or season
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public $episode;

    /**
     * An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public $episodes;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public $musicBy;

    /**
     * The number of episodes in this season or series.
     *
     * @var Float
     */
    public $numberOfEpisodes;

    /**
     * The number of seasons in this series.
     *
     * @var Float
     */
    public $numberOfSeasons;

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
     * A season in a tv/radio series.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public $season;

    /**
     * A season in a tv/radio series. (legacy spelling; see singular form, season)
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public $seasons;

    /**
     * The start date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    public $startDate;

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
    public $context = "http://schema.org/Series";

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
     * @param $endDate DateTime
     */
    public function addEndDate($endDate)
    {
        $this->endDate []= $endDate;
        return $this;
    }

    /**
     * @param $episode Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function addEpisode($episode)
    {
        $this->episode []= $episode;
        return $this;
    }

    /**
     * @param $episodes Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function addEpisodes($episodes)
    {
        $this->episodes []= $episodes;
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
     * @param $numberOfEpisodes Float
     */
    public function addNumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes []= $numberOfEpisodes;
        return $this;
    }

    /**
     * @param $numberOfSeasons Float
     */
    public function addNumberOfSeasons($numberOfSeasons)
    {
        $this->numberOfSeasons []= $numberOfSeasons;
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
     * @param $season Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function addSeason($season)
    {
        $this->season []= $season;
        return $this;
    }

    /**
     * @param $seasons Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function addSeasons($seasons)
    {
        $this->seasons []= $seasons;
        return $this;
    }

    /**
     * @param $startDate DateTime
     */
    public function addStartDate($startDate)
    {
        $this->startDate []= $startDate;
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
