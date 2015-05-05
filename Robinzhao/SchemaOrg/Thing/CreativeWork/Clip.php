<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Clip
 * http://schema.org/Clip
 */
class Clip extends CreativeWork
{

    /**
     * Position of the clip within an ordered group of clips.
     *
     * @var Integer
     */
    public $clipNumber;

    /**
     * The episode to which this clip belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public $partOfEpisode;

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
     * A publication event associated with the episode, clip or media object.
     *
     * @var Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public $publication;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Clip";

    /**
     * @param $clipNumber Integer
     */
    public function addClipNumber($clipNumber)
    {
        $this->clipNumber []= $clipNumber;
        return $this;
    }

    /**
     * @param $partOfEpisode Robinzhao\SchemaOrg\Thing\CreativeWork\Episode
     */
    public function addPartOfEpisode($partOfEpisode)
    {
        $this->partOfEpisode []= $partOfEpisode;
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
     * @param $publication Robinzhao\SchemaOrg\Thing\Event\PublicationEvent
     */
    public function addPublication($publication)
    {
        $this->publication []= $publication;
        return $this;
    }

}
