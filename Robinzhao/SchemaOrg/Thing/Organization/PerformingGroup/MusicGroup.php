<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup;

use Robinzhao\SchemaOrg\Thing\Organization\PerformingGroup;

/**
 * Music Group
 * http://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup
{

    /**
     * A music album.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public $album;

    /**
     * A collection of music albums (legacy spelling; see singular form, album).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public $albums;

    /**
     * A member of the music group—for example, John, Paul, George, or Ringo.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $musicGroupMember;

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
    public $context = "http://schema.org/MusicGroup";

    /**
     * @param $album Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function addAlbum($album)
    {
        $this->album []= $album;
        return $this;
    }

    /**
     * @param $albums Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function addAlbums($albums)
    {
        $this->albums []= $albums;
        return $this;
    }

    /**
     * @param $musicGroupMember Robinzhao\SchemaOrg\Thing\Person
     */
    public function addMusicGroupMember($musicGroupMember)
    {
        $this->musicGroupMember []= $musicGroupMember;
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