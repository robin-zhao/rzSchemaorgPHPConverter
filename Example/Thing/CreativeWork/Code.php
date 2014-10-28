<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Code
 * http://schema.org/Code
 */
class Code extends CreativeWork
{

    /**
     * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex)
     *
     * @var String
     */
    private $codeRepository;

    /**
     * The computer programming language.
     *
     * @var Example\Thing
     */
    private $programmingLanguage;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0)
     *
     * @var String
     */
    private $runtime;

    /**
     * Full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @var String
     */
    private $sampleType;

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     * @var Example\Thing\CreativeWork\SoftwareApplication
     */
    private $targetProduct;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Code";

    public function getCodeRepository()
    {
        return $this->codeRepository;
    }

    public function setCodeRepository($codeRepository)
    {
        $this->codeRepository = $codeRepository;
        return $this;
    }

    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    public function setProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage = $programmingLanguage;
        return $this;
    }

    public function getRuntime()
    {
        return $this->runtime;
    }

    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
        return $this;
    }

    public function getSampleType()
    {
        return $this->sampleType;
    }

    public function setSampleType($sampleType)
    {
        $this->sampleType = $sampleType;
        return $this;
    }

    public function getTargetProduct()
    {
        return $this->targetProduct;
    }

    public function setTargetProduct($targetProduct)
    {
        $this->targetProduct = $targetProduct;
        return $this;
    }

}
