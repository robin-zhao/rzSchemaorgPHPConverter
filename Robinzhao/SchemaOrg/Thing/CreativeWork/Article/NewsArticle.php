<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\Article;

use Robinzhao\SchemaOrg\Thing\CreativeWork\Article;

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
    protected $dateline;

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     *
     * @var String
     */
    protected $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @var String
     */
    protected $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
     *
     * @var String
     */
    protected $printPage;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     *
     * @var String
     */
    protected $printSection;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/NewsArticle";

    /**
     * @return String
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * @param $dateline String
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;
        return $this;
    }

    /**
     * @return String
     */
    public function getPrintColumn()
    {
        return $this->printColumn;
    }

    /**
     * @param $printColumn String
     */
    public function setPrintColumn($printColumn)
    {
        $this->printColumn = $printColumn;
        return $this;
    }

    /**
     * @return String
     */
    public function getPrintEdition()
    {
        return $this->printEdition;
    }

    /**
     * @param $printEdition String
     */
    public function setPrintEdition($printEdition)
    {
        $this->printEdition = $printEdition;
        return $this;
    }

    /**
     * @return String
     */
    public function getPrintPage()
    {
        return $this->printPage;
    }

    /**
     * @param $printPage String
     */
    public function setPrintPage($printPage)
    {
        $this->printPage = $printPage;
        return $this;
    }

    /**
     * @return String
     */
    public function getPrintSection()
    {
        return $this->printSection;
    }

    /**
     * @param $printSection String
     */
    public function setPrintSection($printSection)
    {
        $this->printSection = $printSection;
        return $this;
    }

}
