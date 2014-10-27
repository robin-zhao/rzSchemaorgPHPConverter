<?php

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

    public function getalignmentType()
    {
        return $this->alignmentType;
    }

    public function setalignmentType($alignmentType)
    {
        $this->alignmentType = $alignmentType;
        return $this;
    }

    public function geteducationalFramework()
    {
        return $this->educationalFramework;
    }

    public function seteducationalFramework($educationalFramework)
    {
        $this->educationalFramework = $educationalFramework;
        return $this;
    }

    public function gettargetDescription()
    {
        return $this->targetDescription;
    }

    public function settargetDescription($targetDescription)
    {
        $this->targetDescription = $targetDescription;
        return $this;
    }

    public function gettargetName()
    {
        return $this->targetName;
    }

    public function settargetName($targetName)
    {
        $this->targetName = $targetName;
        return $this;
    }

    public function gettargetUrl()
    {
        return $this->targetUrl;
    }

    public function settargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

}
