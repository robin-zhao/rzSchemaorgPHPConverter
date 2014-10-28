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
    protected $codeRepository;

    /**
     * The computer programming language.
     *
     * @var Example\Thing
     */
    protected $programmingLanguage;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0)
     *
     * @var String
     */
    protected $runtime;

    /**
     * Full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @var String
     */
    protected $sampleType;

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     * @var Example\Thing\CreativeWork\SoftwareApplication
     */
    protected $targetProduct;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Code";

    /**
     * @return String
     */
    public function getCodeRepository()
    {
        return $this->codeRepository;
    }

    /**
     * @param $codeRepository String
     */
    public function setCodeRepository($codeRepository)
    {
        $this->codeRepository = $codeRepository;
        return $this;
    }

    /**
     * @return Example\Thing
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    /**
     * @param $programmingLanguage Example\Thing
     */
    public function setProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage = $programmingLanguage;
        return $this;
    }

    /**
     * @return String
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param $runtime String
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
        return $this;
    }

    /**
     * @return String
     */
    public function getSampleType()
    {
        return $this->sampleType;
    }

    /**
     * @param $sampleType String
     */
    public function setSampleType($sampleType)
    {
        $this->sampleType = $sampleType;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\SoftwareApplication
     */
    public function getTargetProduct()
    {
        return $this->targetProduct;
    }

    /**
     * @param $targetProduct Example\Thing\CreativeWork\SoftwareApplication
     */
    public function setTargetProduct($targetProduct)
    {
        $this->targetProduct = $targetProduct;
        return $this;
    }

}
