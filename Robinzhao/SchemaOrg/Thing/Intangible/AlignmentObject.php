<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\Intangible;

use Robinzhao\SchemaOrg\Thing\Intangible;

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
    public $alignmentType;

    /**
     * The framework to which the resource being described is aligned.
     *
     * @var String
     */
    public $educationalFramework;

    /**
     * The description of a node in an established educational framework.
     *
     * @var String
     */
    public $targetDescription;

    /**
     * The name of a node in an established educational framework.
     *
     * @var String
     */
    public $targetName;

    /**
     * The URL of a node in an established educational framework.
     *
     * @var String
     */
    public $targetUrl;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AlignmentObject";

    /**
     * @param $alignmentType String
     */
    public function addAlignmentType($alignmentType)
    {
        $this->alignmentType []= $alignmentType;
        return $this;
    }

    /**
     * @param $educationalFramework String
     */
    public function addEducationalFramework($educationalFramework)
    {
        $this->educationalFramework []= $educationalFramework;
        return $this;
    }

    /**
     * @param $targetDescription String
     */
    public function addTargetDescription($targetDescription)
    {
        $this->targetDescription []= $targetDescription;
        return $this;
    }

    /**
     * @param $targetName String
     */
    public function addTargetName($targetName)
    {
        $this->targetName []= $targetName;
        return $this;
    }

    /**
     * @param $targetUrl String
     */
    public function addTargetUrl($targetUrl)
    {
        $this->targetUrl []= $targetUrl;
        return $this;
    }


}