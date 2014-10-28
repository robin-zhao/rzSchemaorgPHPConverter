<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Organization;

use Example\Thing\Organization;

/**
 * Educational Organization
 * http://schema.org/EducationalOrganization
 */
class EducationalOrganization extends Organization
{

    /**
     * Alumni of educational organization.
     *
     * @var Example\Thing\Person
     */
    private $alumni;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/EducationalOrganization";

    public function getAlumni()
    {
        return $this->alumni;
    }

    public function setAlumni($alumni)
    {
        $this->alumni = $alumni;
        return $this;
    }

}
