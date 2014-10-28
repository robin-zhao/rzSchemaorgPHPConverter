<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Intangible;

use Example\Thing\Intangible;

/**
 * Alignment Object
 * http://schema.org/AlignmentObject
 */
class AlignmentObject extends Intangible
{

    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationLevel'.
     *
     * @var String
     */
    private $alignmentType;

    /**
     * The framework to which the resource being described is aligned.
     *
     * @var String
     */
    private $educationalFramework;

    /**
     * The description of a node in an established educational framework.
     *
     * @var String
     */
    private $targetDescription;

    /**
     * The name of a node in an established educational framework.
     *
     * @var String
     */
    private $targetName;

    /**
     * The URL of a node in an established educational framework.
     *
     * @var String
     */
    private $targetUrl;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AlignmentObject";

    /**
     * @return String
     */
    public function getAlignmentType()
    {
        return $this->alignmentType;
    }

    /**
     * @param $alignmentType String
     */
    public function setAlignmentType($alignmentType)
    {
        $this->alignmentType = $alignmentType;
        return $this;
    }

    /**
     * @return String
     */
    public function getEducationalFramework()
    {
        return $this->educationalFramework;
    }

    /**
     * @param $educationalFramework String
     */
    public function setEducationalFramework($educationalFramework)
    {
        $this->educationalFramework = $educationalFramework;
        return $this;
    }

    /**
     * @return String
     */
    public function getTargetDescription()
    {
        return $this->targetDescription;
    }

    /**
     * @param $targetDescription String
     */
    public function setTargetDescription($targetDescription)
    {
        $this->targetDescription = $targetDescription;
        return $this;
    }

    /**
     * @return String
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * @param $targetName String
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;
        return $this;
    }

    /**
     * @return String
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param $targetUrl String
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

}
