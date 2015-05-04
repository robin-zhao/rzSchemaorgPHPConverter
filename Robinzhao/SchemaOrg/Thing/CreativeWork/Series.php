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
     * The end date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    protected $endDate;

    /**
     * An episode of a TV/radio series or season
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    protected $episode;

    /**
     * An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    protected $episodes;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person|Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    protected $musicBy;

    /**
     * The number of episodes in this season or series.
     *
     * @var Float
     */
    protected $numberOfEpisodes;

    /**
     * The number of seasons in this series.
     *
     * @var Float
     */
    protected $numberOfSeasons;

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
     * A season in a tv/radio series.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    protected $season;

    /**
     * A season in a tv/radio series. (legacy spelling; see singular form, season)
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    protected $seasons;

    /**
     * The start date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    protected $startDate;

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
    protected $context = "http://schema.org/Series";

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
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param $endDate DateTime
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param $episode Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function setEpisode($episode)
    {
        $this->episode = $episode;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param $episodes Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;
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
     * @return Float
     */
    public function getNumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    /**
     * @param $numberOfEpisodes Float
     */
    public function setNumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
        return $this;
    }

    /**
     * @return Float
     */
    public function getNumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    /**
     * @param $numberOfSeasons Float
     */
    public function setNumberOfSeasons($numberOfSeasons)
    {
        $this->numberOfSeasons = $numberOfSeasons;
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
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param $season Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function setSeason($season)
    {
        $this->season = $season;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param $seasons Robinzhao\SchemaOrg\Thing\CreativeWork\Season
     */
    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param $startDate DateTime
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
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
