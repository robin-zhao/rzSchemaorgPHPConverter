<?php

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

    public function getendDate()
    {
        return $this->endDate;
    }

    public function setendDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getepisode()
    {
        return $this->episode;
    }

    public function setepisode($episode)
    {
        $this->episode = $episode;
        return $this;
    }

    public function getepisodes()
    {
        return $this->episodes;
    }

    public function setepisodes($episodes)
    {
        $this->episodes = $episodes;
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

    public function getnumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    public function setnumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
        return $this;
    }

    public function getnumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    public function setnumberOfSeasons($numberOfSeasons)
    {
        $this->numberOfSeasons = $numberOfSeasons;
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

    public function getseason()
    {
        return $this->season;
    }

    public function setseason($season)
    {
        $this->season = $season;
        return $this;
    }

    public function getseasons()
    {
        return $this->seasons;
    }

    public function setseasons($seasons)
    {
        $this->seasons = $seasons;
        return $this;
    }

    public function getstartDate()
    {
        return $this->startDate;
    }

    public function setstartDate($startDate)
    {
        $this->startDate = $startDate;
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
