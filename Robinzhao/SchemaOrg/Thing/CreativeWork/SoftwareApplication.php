<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Software Application
 * http://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork
{

    /**
     * Type of software application, e.g. "Game, Multimedia".
     *
     * @var String
     */
    public $applicationCategory;

    /**
     * Subcategory of the application, e.g. "Arcade Game".
     *
     * @var String
     */
    public $applicationSubCategory;

    /**
     * The name of the application suite to which the application belongs (e.g. Excel belongs to Office)
     *
     * @var String
     */
    public $applicationSuite;

    /**
     * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var String
     */
    public $countriesNotSupported;

    /**
     * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @var String
     */
    public $countriesSupported;

    /**
     * Device required to run the application. Used in cases where a specific make/model is required to run the application.
     *
     * @var String
     */
    public $device;

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @var String
     */
    public $downloadUrl;

    /**
     * Features or modules provided by this application (and possibly required by other applications).
     *
     * @var String
     */
    public $featureList;

    /**
     * MIME format of the binary (e.g. application/zip).
     *
     * @var String
     */
    public $fileFormat;

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
     *
     * @var Integer
     */
    public $fileSize;

    /**
     * URL at which the app may be installed, if different from the URL of the item.
     *
     * @var String
     */
    public $installUrl;

    /**
     * Minimum memory requirements.
     *
     * @var String
     */
    public $memoryRequirements;

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     *
     * @var String
     */
    public $operatingSystem;

    /**
     * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
     *
     * @var String
     */
    public $permissions;

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @var String
     */
    public $processorRequirements;

    /**
     * Description of what changed in this version.
     *
     * @var String
     */
    public $releaseNotes;

    /**
     * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime).
     *
     * @var String
     */
    public $requirements;

    /**
     * A link to a screenshot image of the app.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|String
     */
    public $screenshot;

    /**
     * Version of the software instance.
     *
     * @var String
     */
    public $softwareVersion;

    /**
     * Storage requirements (free space required).
     *
     * @var String
     */
    public $storageRequirements;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/SoftwareApplication";

    /**
     * @param $applicationCategory String
     */
    public function addApplicationCategory($applicationCategory)
    {
        $this->applicationCategory []= $applicationCategory;
        return $this;
    }

    /**
     * @param $applicationSubCategory String
     */
    public function addApplicationSubCategory($applicationSubCategory)
    {
        $this->applicationSubCategory []= $applicationSubCategory;
        return $this;
    }

    /**
     * @param $applicationSuite String
     */
    public function addApplicationSuite($applicationSuite)
    {
        $this->applicationSuite []= $applicationSuite;
        return $this;
    }

    /**
     * @param $countriesNotSupported String
     */
    public function addCountriesNotSupported($countriesNotSupported)
    {
        $this->countriesNotSupported []= $countriesNotSupported;
        return $this;
    }

    /**
     * @param $countriesSupported String
     */
    public function addCountriesSupported($countriesSupported)
    {
        $this->countriesSupported []= $countriesSupported;
        return $this;
    }

    /**
     * @param $device String
     */
    public function addDevice($device)
    {
        $this->device []= $device;
        return $this;
    }

    /**
     * @param $downloadUrl String
     */
    public function addDownloadUrl($downloadUrl)
    {
        $this->downloadUrl []= $downloadUrl;
        return $this;
    }

    /**
     * @param $featureList String
     */
    public function addFeatureList($featureList)
    {
        $this->featureList []= $featureList;
        return $this;
    }

    /**
     * @param $fileFormat String
     */
    public function addFileFormat($fileFormat)
    {
        $this->fileFormat []= $fileFormat;
        return $this;
    }

    /**
     * @param $fileSize Integer
     */
    public function addFileSize($fileSize)
    {
        $this->fileSize []= $fileSize;
        return $this;
    }

    /**
     * @param $installUrl String
     */
    public function addInstallUrl($installUrl)
    {
        $this->installUrl []= $installUrl;
        return $this;
    }

    /**
     * @param $memoryRequirements String
     */
    public function addMemoryRequirements($memoryRequirements)
    {
        $this->memoryRequirements []= $memoryRequirements;
        return $this;
    }

    /**
     * @param $operatingSystem String
     */
    public function addOperatingSystem($operatingSystem)
    {
        $this->operatingSystem []= $operatingSystem;
        return $this;
    }

    /**
     * @param $permissions String
     */
    public function addPermissions($permissions)
    {
        $this->permissions []= $permissions;
        return $this;
    }

    /**
     * @param $processorRequirements String
     */
    public function addProcessorRequirements($processorRequirements)
    {
        $this->processorRequirements []= $processorRequirements;
        return $this;
    }

    /**
     * @param $releaseNotes String
     */
    public function addReleaseNotes($releaseNotes)
    {
        $this->releaseNotes []= $releaseNotes;
        return $this;
    }

    /**
     * @param $requirements String
     */
    public function addRequirements($requirements)
    {
        $this->requirements []= $requirements;
        return $this;
    }

    /**
     * @param $screenshot Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|String
     */
    public function addScreenshot($screenshot)
    {
        $this->screenshot []= $screenshot;
        return $this;
    }

    /**
     * @param $softwareVersion String
     */
    public function addSoftwareVersion($softwareVersion)
    {
        $this->softwareVersion []= $softwareVersion;
        return $this;
    }

    /**
     * @param $storageRequirements String
     */
    public function addStorageRequirements($storageRequirements)
    {
        $this->storageRequirements []= $storageRequirements;
        return $this;
    }


}