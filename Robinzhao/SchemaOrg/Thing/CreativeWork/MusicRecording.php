<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Music Recording
 * http://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork
{

    /**
     * The artist that performed this album or recording.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    protected $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    protected $duration;

    /**
     * The album to which this recording belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    protected $inAlbum;

    /**
     * The playlist to which this recording belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist
     */
    protected $inPlaylist;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MusicRecording";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param $byArtist Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function setByArtist($byArtist)
    {
        $this->byArtist = $byArtist;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    /**
     * @param $inAlbum Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function setInAlbum($inAlbum)
    {
        $this->inAlbum = $inAlbum;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist
     */
    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    /**
     * @param $inPlaylist Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist
     */
    public function setInPlaylist($inPlaylist)
    {
        $this->inPlaylist = $inPlaylist;
        return $this;
    }

}
