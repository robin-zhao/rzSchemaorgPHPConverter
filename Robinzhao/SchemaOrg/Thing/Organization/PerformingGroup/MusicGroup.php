<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $album;

    /**
     * A collection of music albums (legacy spelling; see singular form, album).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    protected $albums;

    /**
     * A member of the music group—for example, John, Paul, George, or Ringo.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $musicGroupMember;

    /**
     * A music recording (track)—usually a single song.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    protected $track;

    /**
     * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    protected $tracks;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MusicGroup";

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param $album Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function setAlbum($album)
    {
        $this->album = $album;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param $albums Robinzhao\SchemaOrg\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getMusicGroupMember()
    {
        return $this->musicGroupMember;
    }

    /**
     * @param $musicGroupMember Robinzhao\SchemaOrg\Thing\Person
     */
    public function setMusicGroupMember($musicGroupMember)
    {
        $this->musicGroupMember = $musicGroupMember;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param $track Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public function setTrack($track)
    {
        $this->track = $track;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param $tracks Robinzhao\SchemaOrg\Thing\CreativeWork\MusicRecording
     */
    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
        return $this;
    }

}
