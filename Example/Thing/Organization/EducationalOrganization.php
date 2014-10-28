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
    protected $alumni;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/EducationalOrganization";

    /**
     * @return Example\Thing\Person
     */
    public function getAlumni()
    {
        return $this->alumni;
    }

    /**
     * @param $alumni Example\Thing\Person
     */
    public function setAlumni($alumni)
    {
        $this->alumni = $alumni;
        return $this;
    }

}
