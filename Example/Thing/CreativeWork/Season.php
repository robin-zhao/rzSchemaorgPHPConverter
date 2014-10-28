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

    public function getnumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    public function setnumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
        return $this;
    }

    public function getpartOfSeries()
    {
        return $this->partOfSeries;
    }

    public function setpartOfSeries($partOfSeries)
    {
        $this->partOfSeries = $partOfSeries;
        return $this;
    }

    public function getposition()
    {
        return $this->position;
    }

    public function setposition($position)
    {
        $this->position = $position;
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

    public function getseasonNumber()
    {
        return $this->seasonNumber;
    }

    public function setseasonNumber($seasonNumber)
    {
        $this->seasonNumber = $seasonNumber;
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
