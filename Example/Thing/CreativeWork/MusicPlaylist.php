<?php

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

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
    private $numTracks;

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
    private $url = "http://schema.org/MusicPlaylist";

    public function getnumTracks()
    {
        return $this->numTracks;
    }

    public function setnumTracks($numTracks)
    {
        $this->numTracks = $numTracks;
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
