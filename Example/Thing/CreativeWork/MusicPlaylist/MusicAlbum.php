<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
    protected $byArtist;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MusicAlbum";

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

}
