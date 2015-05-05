<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Organization;

use Robinzhao\SchemaOrg\Thing\Organization;

/**
 * Educational Organization
 * http://schema.org/EducationalOrganization
 */
class EducationalOrganization extends Organization
{

    /**
     * Alumni of educational organization.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $alumni;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/EducationalOrganization";

    /**
     * @param $alumni Robinzhao\SchemaOrg\Thing\Person
     */
    public function addAlumni($alumni)
    {
        $this->alumni []= $alumni;
        return $this;
    }

}
