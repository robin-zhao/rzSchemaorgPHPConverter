<?php
/**
 * This is an auto generated file.
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
    public $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public $duration;

    /**
     * The album to which this recording belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public $inAlbum;

    /**
     * The playlist to which this recording belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist
     */
    public $inPlaylist;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MusicRecording";

    /**
     * @param $byArtist Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function addByArtist($byArtist)
    {
        $this->byArtist []= $byArtist;
        return $this;
    }

    /**
     * @param $duration Robinzhao\SchemaOrg\Thing\Intangible\Quantity\Duration
     */
    public function addDuration($duration)
    {
        $this->duration []= $duration;
        return $this;
    }

    /**
     * @param $inAlbum Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function addInAlbum($inAlbum)
    {
        $this->inAlbum []= $inAlbum;
        return $this;
    }

    /**
     * @param $inPlaylist Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist
     */
    public function addInPlaylist($inPlaylist)
    {
        $this->inPlaylist []= $inPlaylist;
        return $this;
    }


}