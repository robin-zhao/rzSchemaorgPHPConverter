<?php

namespace Example\Thing\CreativeWork\MusicPlaylist;

use Example\Thing\CreativeWork\MusicPlaylist;

/**
 * Music Album
 * http://schema.org/MusicAlbum
 */
class MusicAlbum extends MusicPlaylist
{

    /**
     * The artist that performed this album or recording.
     *
     * @var Example\Thing\Organization\PerformingGroup\MusicGroup
     */
    private $byArtist;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MusicAlbum";

    public function getbyArtist()
    {
        return $this->byArtist;
    }

    public function setbyArtist($byArtist)
    {
        $this->byArtist = $byArtist;
        return $this;
    }

}
