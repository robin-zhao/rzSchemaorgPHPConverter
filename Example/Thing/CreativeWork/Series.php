<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Series
 * http://schema.org/Series
 */
class Series extends CreativeWork
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
     * The end date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    private $endDate;

    /**
     * An episode of a TV/radio series or season
     *
     * @var Example\Thing\CreativeWork\Episode
     */
    private $episode;

    /**
     * An episode of a TV/radio series or season (legacy spelling; see singular form, episode)
     *
     * @var Example\Thing\CreativeWork\Episode
     */
    private $episodes;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Example\Thing\Person|Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    private $musicBy;

    /**
     * The number of episodes in this season or series.
     *
     * @var Float
     */
    private $numberOfEpisodes;

    /**
     * The number of seasons in this series.
     *
     * @var Float
     */
    private $numberOfSeasons;

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
     * A season in a tv/radio series.
     *
     * @var Example\Thing\CreativeWork\Season
     */
    private $season;

    /**
     * A season in a tv/radio series. (legacy spelling; see singular form, season)
     *
     * @var Example\Thing\CreativeWork\Season
     */
    private $seasons;

    /**
     * The start date and time of the event or item (in ISO 8601 date format).
     *
     * @var DateTime
     */
    private $startDate;

    /**
     * The trailer of a movie or tv/radio series, season, or episode.
     *
     * @var Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    private $trailer;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Series";

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
     * @return Example\Thing\CreativeWork\Episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param $episode Example\Thing\CreativeWork\Episode
     */
    public function setEpisode($episode)
    {
        $this->episode = $episode;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Episode
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param $episodes Example\Thing\CreativeWork\Episode
     */
    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;
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
     * @return Example\Thing\CreativeWork\Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param $season Example\Thing\CreativeWork\Season
     */
    public function setSeason($season)
    {
        $this->season = $season;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\Season
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param $seasons Example\Thing\CreativeWork\Season
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
