<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getByArtist()
    {
        return $this->byArtist;
    }

    public function setByArtist($byArtist)
    {
        $this->byArtist = $byArtist;
        return $this;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    public function setInAlbum($inAlbum)
    {
        $this->inAlbum = $inAlbum;
        return $this;
    }

    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    public function setInPlaylist($inPlaylist)
    {
        $this->inPlaylist = $inPlaylist;
        return $this;
    }

}
