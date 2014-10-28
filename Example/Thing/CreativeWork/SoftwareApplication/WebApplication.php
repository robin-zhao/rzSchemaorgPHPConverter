<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\SoftwareApplication;

use Example\Thing\CreativeWork\SoftwareApplication;

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
    private $browserRequirements;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/WebApplication";

    public function getBrowserRequirements()
    {
        return $this->browserRequirements;
    }

    public function setBrowserRequirements($browserRequirements)
    {
        $this->browserRequirements = $browserRequirements;
        return $this;
    }

}
