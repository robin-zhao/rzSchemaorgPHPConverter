<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

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
    public $codeRepository;

    /**
     * The computer programming language.
     *
     * @var Robinzhao\SchemaOrg\Thing
     */
    public $programmingLanguage;

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0)
     *
     * @var String
     */
    public $runtime;

    /**
     * Full (compile ready) solution, code snippet, inline code, scripts, template.
     *
     * @var String
     */
    public $sampleType;

    /**
     * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\SoftwareApplication
     */
    public $targetProduct;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Code";

    /**
     * @param $codeRepository String
     */
    public function addCodeRepository($codeRepository)
    {
        $this->codeRepository []= $codeRepository;
        return $this;
    }

    /**
     * @param $programmingLanguage Robinzhao\SchemaOrg\Thing
     */
    public function addProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage []= $programmingLanguage;
        return $this;
    }

    /**
     * @param $runtime String
     */
    public function addRuntime($runtime)
    {
        $this->runtime []= $runtime;
        return $this;
    }

    /**
     * @param $sampleType String
     */
    public function addSampleType($sampleType)
    {
        $this->sampleType []= $sampleType;
        return $this;
    }

    /**
     * @param $targetProduct Robinzhao\SchemaOrg\Thing\CreativeWork\SoftwareApplication
     */
    public function addTargetProduct($targetProduct)
    {
        $this->targetProduct []= $targetProduct;
        return $this;
    }

}
