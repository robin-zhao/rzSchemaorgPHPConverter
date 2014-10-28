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
    protected $numTracks;

    /**
     * A music recording (track)—usually a single song.
     *
     * @var Example\Thing\CreativeWork\MusicRecording
     */
    protected $track;

    /**
     * A music recording (track)—usually a single song (legacy spelling; see singular form, track).
     *
     * @var Example\Thing\CreativeWork\MusicRecording
     */
    protected $tracks;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MusicPlaylist";

    /**
     * @return Integer
     */
    public function getNumTracks()
    {
        return $this->numTracks;
    }

    /**
     * @param $numTracks Integer
     */
    public function setNumTracks($numTracks)
    {
        $this->numTracks = $numTracks;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MusicRecording
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param $track Example\Thing\CreativeWork\MusicRecording
     */
    public function setTrack($track)
    {
        $this->track = $track;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MusicRecording
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param $tracks Example\Thing\CreativeWork\MusicRecording
     */
    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
        return $this;
    }

}
