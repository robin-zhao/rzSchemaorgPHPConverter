<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\SoftwareApplication;

use Example\Thing\CreativeWork\SoftwareApplication;

/**
 * Mobile Application
 * http://schema.org/MobileApplication
 */
class MobileApplication extends SoftwareApplication
{

    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     *
     * @var String
     */
    private $carrierRequirements;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MobileApplication";

    public function getcarrierRequirements()
    {
        return $this->carrierRequirements;
    }

    public function setcarrierRequirements($carrierRequirements)
    {
        $this->carrierRequirements = $carrierRequirements;
        return $this;
    }

}
