<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject;

use Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject;

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
    protected $transcript;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/AudioObject";

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
