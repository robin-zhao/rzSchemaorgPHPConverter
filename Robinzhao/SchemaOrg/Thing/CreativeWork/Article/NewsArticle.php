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
    public $dateline;

    /**
     * The number of the column in which the NewsArticle appears in the print edition.
     *
     * @var String
     */
    public $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @var String
     */
    public $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
     *
     * @var String
     */
    public $printPage;

    /**
     * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
     *
     * @var String
     */
    public $printSection;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/NewsArticle";

    /**
     * @param $dateline String
     */
    public function addDateline($dateline)
    {
        $this->dateline []= $dateline;
        return $this;
    }

    /**
     * @param $printColumn String
     */
    public function addPrintColumn($printColumn)
    {
        $this->printColumn []= $printColumn;
        return $this;
    }

    /**
     * @param $printEdition String
     */
    public function addPrintEdition($printEdition)
    {
        $this->printEdition []= $printEdition;
        return $this;
    }

    /**
     * @param $printPage String
     */
    public function addPrintPage($printPage)
    {
        $this->printPage []= $printPage;
        return $this;
    }

    /**
     * @param $printSection String
     */
    public function addPrintSection($printSection)
    {
        $this->printSection []= $printSection;
        return $this;
    }

}
