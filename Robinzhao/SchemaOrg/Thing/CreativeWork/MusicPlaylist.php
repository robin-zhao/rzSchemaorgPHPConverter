<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Music Playlist
 * http://schema.org/MusicPlaylist
 */
class MusicPlaylist extends CreativeWork
{

    /**
     * The number of tracks in this album or playlist.
     *
     * @var Integer
     */
    public $numTracks;

    /**
     * A music recording (track)—usually a single song.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public $track;

    /**
     * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public $tracks;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MusicPlaylist";

    /**
     * @param $numTracks Integer
     */
    public function addNumTracks($numTracks)
    {
        $this->numTracks []= $numTracks;
        return $this;
    }

    /**
     * @param $track Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public function addTrack($track)
    {
        $this->track []= $track;
        return $this;
    }

    /**
     * @param $tracks Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public function addTracks($tracks)
    {
        $this->tracks []= $tracks;
        return $this;
    }


}