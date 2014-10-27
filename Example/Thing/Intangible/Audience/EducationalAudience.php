<?php

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

    public function geteducationalRole()
    {
        return $this->educationalRole;
    }

    public function seteducationalRole($educationalRole)
    {
        $this->educationalRole = $educationalRole;
        return $this;
    }

}
