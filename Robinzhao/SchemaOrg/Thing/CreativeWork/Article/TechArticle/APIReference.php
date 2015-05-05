<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

use Robinzhao\SchemaOrg\Thing\CreativeWork\Article\TechArticle;

/**
 * API Reference
 * http://schema.org/APIReference
 */
class APIReference extends TechArticle
{

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll
     *
     * @var String
     */
    public $assembly;

    /**
     * Associated product/technology version. e.g., .NET Framework 4.5
     *
     * @var String
     */
    public $assemblyVersion;

    /**
     * Indicates whether API is managed or unmanaged.
     *
     * @var String
     */
    public $programmingModel;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     * @var String
     */
    public $targetPlatform;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/APIReference";

    /**
     * @param $assembly String
     */
    public function addAssembly($assembly)
    {
        $this->assembly []= $assembly;
        return $this;
    }

    /**
     * @param $assemblyVersion String
     */
    public function addAssemblyVersion($assemblyVersion)
    {
        $this->assemblyVersion []= $assemblyVersion;
        return $this;
    }

    /**
     * @param $programmingModel String
     */
    public function addProgrammingModel($programmingModel)
    {
        $this->programmingModel []= $programmingModel;
        return $this;
    }

    /**
     * @param $targetPlatform String
     */
    public function addTargetPlatform($targetPlatform)
    {
        $this->targetPlatform []= $targetPlatform;
        return $this;
    }

}
