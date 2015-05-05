<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

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
     * The number of episodes in this season or series.
     *
     * @var Float
     */
    public $numberOfEpisodes;

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
     * Position of the season within an ordered group of seasons.
     *
     * @var Integer
     */
    public $seasonNumber;

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
    public $context = "http://schema.org/Season";

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
     * @param $numberOfEpisodes Float
     */
    public function addNumberOfEpisodes($numberOfEpisodes)
    {
        $this->numberOfEpisodes []= $numberOfEpisodes;
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
     * @param $seasonNumber Integer
     */
    public function addSeasonNumber($seasonNumber)
    {
        $this->seasonNumber []= $seasonNumber;
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
