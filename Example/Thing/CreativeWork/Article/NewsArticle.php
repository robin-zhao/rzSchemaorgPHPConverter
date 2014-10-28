<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\Article;

use Example\Thing\CreativeWork\Article;

/**
 * News Article
 * http://schema.org/NewsArticle
 */
class NewsArticle extends Article
{

    /**
     * The location where the NewsArticle was produced.
     *
     * @var String
     */
    private $dateline;

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     *
     * @var String
     */
    private $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @var String
     */
    private $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
     *
     * @var String
     */
    private $printPage;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     *
     * @var String
     */
    private $printSection;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/NewsArticle";

    public function getDateline()
    {
        return $this->dateline;
    }

    public function setDateline($dateline)
    {
        $this->dateline = $dateline;
        return $this;
    }

    public function getPrintColumn()
    {
        return $this->printColumn;
    }

    public function setPrintColumn($printColumn)
    {
        $this->printColumn = $printColumn;
        return $this;
    }

    public function getPrintEdition()
    {
        return $this->printEdition;
    }

    public function setPrintEdition($printEdition)
    {
        $this->printEdition = $printEdition;
        return $this;
    }

    public function getPrintPage()
    {
        return $this->printPage;
    }

    public function setPrintPage($printPage)
    {
        $this->printPage = $printPage;
        return $this;
    }

    public function getPrintSection()
    {
        return $this->printSection;
    }

    public function setPrintSection($printSection)
    {
        $this->printSection = $printSection;
        return $this;
    }

}
