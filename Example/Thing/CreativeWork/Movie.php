<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Movie
 * http://schema.org/Movie
 */
class Movie extends CreativeWork
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
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $duration;

    /**
     * The composer of the movie or TV/radio soundtrack.
     *
     * @var Example\Thing\Person|Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    private $musicBy;

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
     * The trailer of a movie or tv/radio series, season, or episode.
     *
     * @var Example\Thing\CreativeWork\MediaObject\VideoObject
     */
    private $trailer;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Movie";

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

    public function getduration()
    {
        return $this->duration;
    }

    public function setduration($duration)
    {
        $this->duration = $duration;
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
