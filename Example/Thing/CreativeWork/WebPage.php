<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

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
    private $breadcrumb;

    /**
     * Indicates the collection or gallery to which the item belongs.
     *
     * @var Example\Thing\CreativeWork\WebPage\CollectionPage
     */
    private $isPartOf;

    /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     *
     * @var DateTime
     */
    private $lastReviewed;

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @var Example\Thing\CreativeWork\WebPageElement
     */
    private $mainContentOfPage;

    /**
     * Indicates the main image on the page
     *
     * @var Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    private $primaryImageOfPage;

    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @var String
     */
    private $relatedLink;

    /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     *
     * @var Example\Thing\Organization|Example\Thing\Person
     */
    private $reviewedBy;

    /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     *
     * @var String
     */
    private $significantLink;

    /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most (legacy spelling; see singular form, significantLink).
     *
     * @var String
     */
    private $significantLinks;

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @var Example\Thing\Intangible\Enumeration\Specialty
     */
    private $specialty;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/WebPage";

    /**
     * @return String
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * @param $breadcrumb String
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\WebPage\CollectionPage
     */
    public function getIsPartOf()
    {
        return $this->isPartOf;
    }

    /**
     * @param $isPartOf Example\Thing\CreativeWork\WebPage\CollectionPage
     */
    public function setIsPartOf($isPartOf)
    {
        $this->isPartOf = $isPartOf;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastReviewed()
    {
        return $this->lastReviewed;
    }

    /**
     * @param $lastReviewed DateTime
     */
    public function setLastReviewed($lastReviewed)
    {
        $this->lastReviewed = $lastReviewed;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\WebPageElement
     */
    public function getMainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    /**
     * @param $mainContentOfPage Example\Thing\CreativeWork\WebPageElement
     */
    public function setMainContentOfPage($mainContentOfPage)
    {
        $this->mainContentOfPage = $mainContentOfPage;
        return $this;
    }

    /**
     * @return Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function getPrimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    /**
     * @param $primaryImageOfPage Example\Thing\CreativeWork\MediaObject\ImageObject
     */
    public function setPrimaryImageOfPage($primaryImageOfPage)
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
        return $this;
    }

    /**
     * @return String
     */
    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    /**
     * @param $relatedLink String
     */
    public function setRelatedLink($relatedLink)
    {
        $this->relatedLink = $relatedLink;
        return $this;
    }

    /**
     * @return Example\Thing\Organization|Example\Thing\Person
     */
    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    /**
     * @param $reviewedBy Example\Thing\Organization|Example\Thing\Person
     */
    public function setReviewedBy($reviewedBy)
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }

    /**
     * @return String
     */
    public function getSignificantLink()
    {
        return $this->significantLink;
    }

    /**
     * @param $significantLink String
     */
    public function setSignificantLink($significantLink)
    {
        $this->significantLink = $significantLink;
        return $this;
    }

    /**
     * @return String
     */
    public function getSignificantLinks()
    {
        return $this->significantLinks;
    }

    /**
     * @param $significantLinks String
     */
    public function setSignificantLinks($significantLinks)
    {
        $this->significantLinks = $significantLinks;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\Specialty
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param $specialty Example\Thing\Intangible\Enumeration\Specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
        return $this;
    }

}
