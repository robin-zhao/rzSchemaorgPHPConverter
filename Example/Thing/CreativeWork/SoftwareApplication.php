<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Software Application
 * http://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork
{

    /**
     * Type of software application, e.g. "Game, Multimedia".
     *
     * @var String|String
     */
    private $applicationCategory;

    /**
     * Subcategory of the application, e.g. "Arcade Game".
     *
     * @var String|String
     */
    private $applicationSubCategory;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office)
     *
     * @var String
     */
    private $applicationSuite;

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var String
     */
    private $countriesNotSupported;

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var String
     */
    private $countriesSupported;

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     * @var String
     */
    private $device;

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @var String
     */
    private $downloadUrl;

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     *
     * @var String|String
     */
    private $featureList;

    /**
     * MIME format of the binary (e.g. application/zip).
     *
     * @var String
     */
    private $fileFormat;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     *
     * @var Integer
     */
    private $fileSize;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     * @var String
     */
    private $installUrl;

    /**
     * Minimum memory requirements.
     *
     * @var String|String
     */
    private $memoryRequirements;

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     *
     * @var String
     */
    private $operatingSystem;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     *
     * @var String
     */
    private $permissions;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @var String
     */
    private $processorRequirements;

    /**
     * Description of what changed in this version.
     *
     * @var String|String
     */
    private $releaseNotes;

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     *
     * @var String|String
     */
    private $requirements;

    /**
     * A link to a screenshot image of the app.
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject|String
     */
    private $screenshot;

    /**
     * Version of the software instance.
     *
     * @var String
     */
    private $softwareVersion;

    /**
     * Storage requirements (free space required).
     *
     * @var String|String
     */
    private $storageRequirements;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/SoftwareApplication";

    /**
     * @return String|String
     */
    public function getApplicationCategory()
    {
        return $this->applicationCategory;
    }

    /**
     * @param $applicationCategory String|String
     */
    public function setApplicationCategory($applicationCategory)
    {
        $this->applicationCategory = $applicationCategory;
        return $this;
    }

    /**
     * @return String|String
     */
    public function getApplicationSubCategory()
    {
        return $this->applicationSubCategory;
    }

    /**
     * @param $applicationSubCategory String|String
     */
    public function setApplicationSubCategory($applicationSubCategory)
    {
        $this->applicationSubCategory = $applicationSubCategory;
        return $this;
    }

    /**
     * @return String
     */
    public function getApplicationSuite()
    {
        return $this->applicationSuite;
    }

    /**
     * @param $applicationSuite String
     */
    public function setApplicationSuite($applicationSuite)
    {
        $this->applicationSuite = $applicationSuite;
        return $this;
    }

    /**
     * @return String
     */
    public function getCountriesNotSupported()
    {
        return $this->countriesNotSupported;
    }

    /**
     * @param $countriesNotSupported String
     */
    public function setCountriesNotSupported($countriesNotSupported)
    {
        $this->countriesNotSupported = $countriesNotSupported;
        return $this;
    }

    /**
     * @return String
     */
    public function getCountriesSupported()
    {
        return $this->countriesSupported;
    }

    /**
     * @param $countriesSupported String
     */
    public function setCountriesSupported($countriesSupported)
    {
        $this->countriesSupported = $countriesSupported;
        return $this;
    }

    /**
     * @return String
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param $device String
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return String
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * @param $downloadUrl String
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return String|String
     */
    public function getFeatureList()
    {
        return $this->featureList;
    }

    /**
     * @param $featureList String|String
     */
    public function setFeatureList($featureList)
    {
        $this->featureList = $featureList;
        return $this;
    }

    /**
     * @return String
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * @param $fileFormat String
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param $fileSize Integer
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * @return String
     */
    public function getInstallUrl()
    {
        return $this->installUrl;
    }

    /**
     * @param $installUrl String
     */
    public function setInstallUrl($installUrl)
    {
        $this->installUrl = $installUrl;
        return $this;
    }

    /**
     * @return String|String
     */
    public function getMemoryRequirements()
    {
        return $this->memoryRequirements;
    }

    /**
     * @param $memoryRequirements String|String
     */
    public function setMemoryRequirements($memoryRequirements)
    {
        $this->memoryRequirements = $memoryRequirements;
        return $this;
    }

    /**
     * @return String
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * @param $operatingSystem String
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    /**
     * @return String
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param $permissions String
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * @return String
     */
    public function getProcessorRequirements()
    {
        return $this->processorRequirements;
    }

    /**
     * @param $processorRequirements String
     */
    public function setProcessorRequirements($processorRequirements)
    {
        $this->processorRequirements = $processorRequirements;
        return $this;
    }

    /**
     * @return String|String
     */
    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }

    /**
     * @param $releaseNotes String|String
     */
    public function setReleaseNotes($releaseNotes)
    {
        $this->releaseNotes = $releaseNotes;
        return $this;
    }

    /**
     * @return String|String
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @param $requirements String|String
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\ImageObject|String
     */
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * @param $screenshot Example\Thing\CreativeWork\MediaObject\ImageObject|String
     */
    public function setScreenshot($screenshot)
    {
        $this->screenshot = $screenshot;
        return $this;
    }

    /**
     * @return String
     */
    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    /**
     * @param $softwareVersion String
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->softwareVersion = $softwareVersion;
        return $this;
    }

    /**
     * @return String|String
     */
    public function getStorageRequirements()
    {
        return $this->storageRequirements;
    }

    /**
     * @param $storageRequirements String|String
     */
    public function setStorageRequirements($storageRequirements)
    {
        $this->storageRequirements = $storageRequirements;
        return $this;
    }

}
