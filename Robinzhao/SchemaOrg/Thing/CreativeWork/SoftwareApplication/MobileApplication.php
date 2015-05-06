<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Robinzhao\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

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
    public $carrierRequirements;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MobileApplication";

    /**
     * @param $carrierRequirements String
     */
    public function addCarrierRequirements($carrierRequirements)
    {
        $this->carrierRequirements []= $carrierRequirements;
        return $this;
    }


}