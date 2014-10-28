<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\Article\TechArticle;

use Example\Thing\CreativeWork\Article\TechArticle;

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
    private $assembly;

    /**
     * Associated product/technology version. e.g., .NET Framework 4.5
     *
     * @var String
     */
    private $assemblyVersion;

    /**
     * Indicates whether API is managed or unmanaged.
     *
     * @var String
     */
    private $programmingModel;

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     * @var String
     */
    private $targetPlatform;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/APIReference";

    public function getAssembly()
    {
        return $this->assembly;
    }

    public function setAssembly($assembly)
    {
        $this->assembly = $assembly;
        return $this;
    }

    public function getAssemblyVersion()
    {
        return $this->assemblyVersion;
    }

    public function setAssemblyVersion($assemblyVersion)
    {
        $this->assemblyVersion = $assemblyVersion;
        return $this;
    }

    public function getProgrammingModel()
    {
        return $this->programmingModel;
    }

    public function setProgrammingModel($programmingModel)
    {
        $this->programmingModel = $programmingModel;
        return $this;
    }

    public function getTargetPlatform()
    {
        return $this->targetPlatform;
    }

    public function setTargetPlatform($targetPlatform)
    {
        $this->targetPlatform = $targetPlatform;
        return $this;
    }

}
