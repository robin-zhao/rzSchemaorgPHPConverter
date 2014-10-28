<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Music Recording
 * http://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork
{

    /**
     * The artist that performed this album or recording.
     *
     * @var Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    private $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
     *
     * @var Example\Thing\Intangible\Quantity\Duration
     */
    private $duration;

    /**
     * The album to which this recording belongs.
     *
     * @var Example\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    private $inAlbum;

    /**
     * The playlist to which this recording belongs.
     *
     * @var Example\Thing\CreativeWork\MusicPlaylist
     */
    private $inPlaylist;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MusicRecording";

    public function getbyArtist()
    {
        return $this->byArtist;
    }

    public function setbyArtist($byArtist)
    {
        $this->byArtist = $byArtist;
        return $this;
    }

    public function getduration()
    {
        return $this->duration;
    }

    public function setduration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function getinAlbum()
    {
        return $this->inAlbum;
    }

    public function setinAlbum($inAlbum)
    {
        $this->inAlbum = $inAlbum;
        return $this;
    }

    public function getinPlaylist()
    {
        return $this->inPlaylist;
    }

    public function setinPlaylist($inPlaylist)
    {
        $this->inPlaylist = $inPlaylist;
        return $this;
    }

}
