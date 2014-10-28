<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    /**
     * @return String
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param $transcript String
     */
    public function setTranscript($transcript)
    {
        $this->transcript = $transcript;
        return $this;
    }

}
