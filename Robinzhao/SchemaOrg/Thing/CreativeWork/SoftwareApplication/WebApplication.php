<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Robinzhao\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
 * Web Application
 * http://schema.org/WebApplication
 */
class WebApplication extends SoftwareApplication
{

    /**
     * Specifies browser requirements in human-readable text. For example,"requires HTML5 support".
     *
     * @var String
     */
    protected $browserRequirements;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/WebApplication";

    /**
     * @return String
     */
    public function getBrowserRequirements()
    {
        return $this->browserRequirements;
    }

    /**
     * @param $browserRequirements String
     */
    public function setBrowserRequirements($browserRequirements)
    {
        $this->browserRequirements = $browserRequirements;
        return $this;
    }

}
