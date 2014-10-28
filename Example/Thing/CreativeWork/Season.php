<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Season
 * http://schema.org/Season
 */
class Season extends CreativeWork
{

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
     * The number of episodes in this season or series.
     *
     * @var Float
     */
    private $numberOfEpisodes;

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
     * Position of the season within an ordered group of seasons.
     *
     * @var Integer
     */
    private $seasonNumber;

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
    private $url = "http://schema.org/Season";

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
     * @return Integer
     */
    public function getSeasonNumber()
    {
        return $this->seasonNumber;
    }

    /**
     * @param $seasonNumber Integer
     */
    public function setSeasonNumber($seasonNumber)
    {
        $this->seasonNumber = $seasonNumber;
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
