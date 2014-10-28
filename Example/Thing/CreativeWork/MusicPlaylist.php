<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getNumTracks()
    {
        return $this->numTracks;
    }

    public function setNumTracks($numTracks)
    {
        $this->numTracks = $numTracks;
        return $this;
    }

    public function getTrack()
    {
        return $this->track;
    }

    public function setTrack($track)
    {
        $this->track = $track;
        return $this;
    }

    public function getTracks()
    {
        return $this->tracks;
    }

    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
        return $this;
    }

}
