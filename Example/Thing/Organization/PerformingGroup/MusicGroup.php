<?php

namespace Example\Thing\Organization\PerformingGroup;

use Example\Thing\Organization\PerformingGroup;

/**
 * Music Group
 * http://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup
{

    /**
     * A music album.
     *
     * @var Example\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    private $album;

    /**
     * A collection of music albums (legacy spelling; see singular form, album).
     *
     * @var Example\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    private $albums;

    /**
     * A member of the music group—for example, John, Paul, George, or Ringo.
     *
     * @var Example\Thing\Person
     */
    private $musicGroupMember;

    /**
     * A music recording (track)—usually a single song.
     *
     * @var Example\Thing\CreativeWork\MusicRecording
     */
    private $track;

    /**
     * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
     *
     * @var Example\Thing\CreativeWork\MusicRecording
     */
    private $tracks;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MusicGroup";

    public function getalbum()
    {
        return $this->album;
    }

    public function setalbum($album)
    {
        $this->album = $album;
        return $this;
    }

    public function getalbums()
    {
        return $this->albums;
    }

    public function setalbums($albums)
    {
        $this->albums = $albums;
        return $this;
    }

    public function getmusicGroupMember()
    {
        return $this->musicGroupMember;
    }

    public function setmusicGroupMember($musicGroupMember)
    {
        $this->musicGroupMember = $musicGroupMember;
        return $this;
    }

    public function gettrack()
    {
        return $this->track;
    }

    public function settrack($track)
    {
        $this->track = $track;
        return $this;
    }

    public function gettracks()
    {
        return $this->tracks;
    }

    public function settracks($tracks)
    {
        $this->tracks = $tracks;
        return $this;
    }

}
