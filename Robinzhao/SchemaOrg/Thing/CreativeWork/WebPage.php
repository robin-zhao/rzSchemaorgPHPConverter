<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Web Page
 * http://schema.org/WebPage
 */
class WebPage extends CreativeWork
{

    /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     *
     * @var String
     */
    public $breadcrumb;

    /**
     * Indicates the collection or gallery to which the item belongs.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\WebPage\CollectionPage
     */
    public $isPartOf;

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     *
     * @var DateTime
     */
    public $lastReviewed;

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\WebPageElement
     */
    public $mainContentOfPage;

    /**
     * Indicates the main image on the page
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $primaryImageOfPage;

    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @var String
     */
    public $relatedLink;

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public $reviewedBy;

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     * @var String
     */
    public $significantLink;

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most (legacy spelling; see singular form, significantLink).
     *
     * @var String
     */
    public $significantLinks;

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\Specialty
     */
    public $specialty;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/WebPage";

    /**
     * @param $breadcrumb String
     */
    public function addBreadcrumb($breadcrumb)
    {
        $this->breadcrumb []= $breadcrumb;
        return $this;
    }

    /**
     * @param $isPartOf Robinzhao\SchemaOrg\Thing\CreativeWork\WebPage\CollectionPage
     */
    public function addIsPartOf($isPartOf)
    {
        $this->isPartOf []= $isPartOf;
        return $this;
    }

    /**
     * @param $lastReviewed DateTime
     */
    public function addLastReviewed($lastReviewed)
    {
        $this->lastReviewed []= $lastReviewed;
        return $this;
    }

    /**
     * @param $mainContentOfPage Robinzhao\SchemaOrg\Thing\CreativeWork\WebPageElement
     */
    public function addMainContentOfPage($mainContentOfPage)
    {
        $this->mainContentOfPage []= $mainContentOfPage;
        return $this;
    }

    /**
     * @param $primaryImageOfPage Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function addPrimaryImageOfPage($primaryImageOfPage)
    {
        $this->primaryImageOfPage []= $primaryImageOfPage;
        return $this;
    }

    /**
     * @param $relatedLink String
     */
    public function addRelatedLink($relatedLink)
    {
        $this->relatedLink []= $relatedLink;
        return $this;
    }

    /**
     * @param $reviewedBy Robinzhao\SchemaOrg\Thing\Organization|Robinzhao\SchemaOrg\Thing\Person
     */
    public function addReviewedBy($reviewedBy)
    {
        $this->reviewedBy []= $reviewedBy;
        return $this;
    }

    /**
     * @param $significantLink String
     */
    public function addSignificantLink($significantLink)
    {
        $this->significantLink []= $significantLink;
        return $this;
    }

    /**
     * @param $significantLinks String
     */
    public function addSignificantLinks($significantLinks)
    {
        $this->significantLinks []= $significantLinks;
        return $this;
    }

    /**
     * @param $specialty Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\Specialty
     */
    public function addSpecialty($specialty)
    {
        $this->specialty []= $specialty;
        return $this;
    }


}