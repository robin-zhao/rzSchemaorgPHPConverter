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

    /**
     * @return Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param $byArtist Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    public function setByArtist($byArtist)
    {
        $this->byArtist = $byArtist;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Quantity\Duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration Example\Thing\Intangible\Quantity\Duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    /**
     * @param $inAlbum Example\Thing\CreativeWork\MusicPlaylist\MusicAlbum
     */
    public function setInAlbum($inAlbum)
    {
        $this->inAlbum = $inAlbum;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MusicPlaylist
     */
    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    /**
     * @param $inPlaylist Example\Thing\CreativeWork\MusicPlaylist
     */
    public function setInPlaylist($inPlaylist)
    {
        $this->inPlaylist = $inPlaylist;
        return $this;
    }

}
