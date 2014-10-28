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

    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    public function setBreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        return $this;
    }

    public function getIsPartOf()
    {
        return $this->isPartOf;
    }

    public function setIsPartOf($isPartOf)
    {
        $this->isPartOf = $isPartOf;
        return $this;
    }

    public function getLastReviewed()
    {
        return $this->lastReviewed;
    }

    public function setLastReviewed($lastReviewed)
    {
        $this->lastReviewed = $lastReviewed;
        return $this;
    }

    public function getMainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    public function setMainContentOfPage($mainContentOfPage)
    {
        $this->mainContentOfPage = $mainContentOfPage;
        return $this;
    }

    public function getPrimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    public function setPrimaryImageOfPage($primaryImageOfPage)
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
        return $this;
    }

    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    public function setRelatedLink($relatedLink)
    {
        $this->relatedLink = $relatedLink;
        return $this;
    }

    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    public function setReviewedBy($reviewedBy)
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }

    public function getSignificantLink()
    {
        return $this->significantLink;
    }

    public function setSignificantLink($significantLink)
    {
        $this->significantLink = $significantLink;
        return $this;
    }

    public function getSignificantLinks()
    {
        return $this->significantLinks;
    }

    public function setSignificantLinks($significantLinks)
    {
        $this->significantLinks = $significantLinks;
        return $this;
    }

    public function getSpecialty()
    {
        return $this->specialty;
    }

    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
        return $this;
    }

}
