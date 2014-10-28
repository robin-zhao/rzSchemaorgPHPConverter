<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible\Audience;

use Example\Thing\Intangible\Audience;

/**
 * Educational Audience
 * http://schema.org/EducationalAudience
 */
class EducationalAudience extends Audience
{

    /**
     * An educationalRole of an EducationalAudience
     *
     * @var String
     */
    private $educationalRole;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/EducationalAudience";

    /**
     * @return String
     */
    public function getEducationalRole()
    {
        return $this->educationalRole;
    }

    /**
     * @param $educationalRole String
     */
    public function setEducationalRole($educationalRole)
    {
        $this->educationalRole = $educationalRole;
        return $this;
    }

}
