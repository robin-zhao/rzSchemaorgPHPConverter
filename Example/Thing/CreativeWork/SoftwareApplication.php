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

    public function getApplicationCategory()
    {
        return $this->applicationCategory;
    }

    public function setApplicationCategory($applicationCategory)
    {
        $this->applicationCategory = $applicationCategory;
        return $this;
    }

    public function getApplicationSubCategory()
    {
        return $this->applicationSubCategory;
    }

    public function setApplicationSubCategory($applicationSubCategory)
    {
        $this->applicationSubCategory = $applicationSubCategory;
        return $this;
    }

    public function getApplicationSuite()
    {
        return $this->applicationSuite;
    }

    public function setApplicationSuite($applicationSuite)
    {
        $this->applicationSuite = $applicationSuite;
        return $this;
    }

    public function getCountriesNotSupported()
    {
        return $this->countriesNotSupported;
    }

    public function setCountriesNotSupported($countriesNotSupported)
    {
        $this->countriesNotSupported = $countriesNotSupported;
        return $this;
    }

    public function getCountriesSupported()
    {
        return $this->countriesSupported;
    }

    public function setCountriesSupported($countriesSupported)
    {
        $this->countriesSupported = $countriesSupported;
        return $this;
    }

    public function getDevice()
    {
        return $this->device;
    }

    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    public function getFeatureList()
    {
        return $this->featureList;
    }

    public function setFeatureList($featureList)
    {
        $this->featureList = $featureList;
        return $this;
    }

    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getInstallUrl()
    {
        return $this->installUrl;
    }

    public function setInstallUrl($installUrl)
    {
        $this->installUrl = $installUrl;
        return $this;
    }

    public function getMemoryRequirements()
    {
        return $this->memoryRequirements;
    }

    public function setMemoryRequirements($memoryRequirements)
    {
        $this->memoryRequirements = $memoryRequirements;
        return $this;
    }

    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getProcessorRequirements()
    {
        return $this->processorRequirements;
    }

    public function setProcessorRequirements($processorRequirements)
    {
        $this->processorRequirements = $processorRequirements;
        return $this;
    }

    public function getReleaseNotes()
    {
        return $this->releaseNotes;
    }

    public function setReleaseNotes($releaseNotes)
    {
        $this->releaseNotes = $releaseNotes;
        return $this;
    }

    public function getRequirements()
    {
        return $this->requirements;
    }

    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    public function getScreenshot()
    {
        return $this->screenshot;
    }

    public function setScreenshot($screenshot)
    {
        $this->screenshot = $screenshot;
        return $this;
    }

    public function getSoftwareVersion()
    {
        return $this->softwareVersion;
    }

    public function setSoftwareVersion($softwareVersion)
    {
        $this->softwareVersion = $softwareVersion;
        return $this;
    }

    public function getStorageRequirements()
    {
        return $this->storageRequirements;
    }

    public function setStorageRequirements($storageRequirements)
    {
        $this->storageRequirements = $storageRequirements;
        return $this;
    }

}
