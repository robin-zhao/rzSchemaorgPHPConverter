<?php
/**
 * This is an auto generated file.
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
    public $transcript;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AudioObject";

    /**
     * @param $transcript String
     */
    public function addTranscript($transcript)
    {
        $this->transcript []= $transcript;
        return $this;
    }


}