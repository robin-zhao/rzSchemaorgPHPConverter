<?php

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

    public function getbreadcrumb()
    {
        return $this->breadcrumb;
    }

    public function setbreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        return $this;
    }

    public function getisPartOf()
    {
        return $this->isPartOf;
    }

    public function setisPartOf($isPartOf)
    {
        $this->isPartOf = $isPartOf;
        return $this;
    }

    public function getlastReviewed()
    {
        return $this->lastReviewed;
    }

    public function setlastReviewed($lastReviewed)
    {
        $this->lastReviewed = $lastReviewed;
        return $this;
    }

    public function getmainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    public function setmainContentOfPage($mainContentOfPage)
    {
        $this->mainContentOfPage = $mainContentOfPage;
        return $this;
    }

    public function getprimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    public function setprimaryImageOfPage($primaryImageOfPage)
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
        return $this;
    }

    public function getrelatedLink()
    {
        return $this->relatedLink;
    }

    public function setrelatedLink($relatedLink)
    {
        $this->relatedLink = $relatedLink;
        return $this;
    }

    public function getreviewedBy()
    {
        return $this->reviewedBy;
    }

    public function setreviewedBy($reviewedBy)
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }

    public function getsignificantLink()
    {
        return $this->significantLink;
    }

    public function setsignificantLink($significantLink)
    {
        $this->significantLink = $significantLink;
        return $this;
    }

    public function getsignificantLinks()
    {
        return $this->significantLinks;
    }

    public function setsignificantLinks($significantLinks)
    {
        $this->significantLinks = $significantLinks;
        return $this;
    }

    public function getspecialty()
    {
        return $this->specialty;
    }

    public function setspecialty($specialty)
    {
        $this->specialty = $specialty;
        return $this;
    }

}
