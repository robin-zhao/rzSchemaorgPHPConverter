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
    public $browserRequirements;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/WebApplication";

    /**
     * @param $browserRequirements String
     */
    public function addBrowserRequirements($browserRequirements)
    {
        $this->browserRequirements []= $browserRequirements;
        return $this;
    }

}
