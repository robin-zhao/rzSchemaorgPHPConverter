<?php

namespace Example\Thing\CreativeWork\MediaObject;

use Example\Thing\CreativeWork\MediaObject;

/**
 * Audio Object
 * http://schema.org/AudioObject
 */
class AudioObject extends MediaObject
{

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
     *
     * @var String
     */
    private $transcript;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AudioObject";

    public function gettranscript()
    {
        return $this->transcript;
    }

    public function settranscript($transcript)
    {
        $this->transcript = $transcript;
        return $this;
    }

}
