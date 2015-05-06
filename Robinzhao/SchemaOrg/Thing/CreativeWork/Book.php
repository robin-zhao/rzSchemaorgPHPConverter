<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Book
 * http://schema.org/Book
 */
class Book extends CreativeWork
{

    /**
     * The edition of the book.
     *
     * @var String
     */
    public $bookEdition;

    /**
     * The format of the book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BookFormatType
     */
    public $bookFormat;

    /**
     * The illustrator of the book.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    public $illustrator;

    /**
     * The ISBN of the book.
     *
     * @var String
     */
    public $isbn;

    /**
     * The number of pages in the book.
     *
     * @var Integer
     */
    public $numberOfPages;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Book";

    /**
     * @param $bookEdition String
     */
    public function addBookEdition($bookEdition)
    {
        $this->bookEdition []= $bookEdition;
        return $this;
    }

    /**
     * @param $bookFormat Robinzhao\SchemaOrg\Thing\Intangible\Enumeration\BookFormatType
     */
    public function addBookFormat($bookFormat)
    {
        $this->bookFormat []= $bookFormat;
        return $this;
    }

    /**
     * @param $illustrator Robinzhao\SchemaOrg\Thing\Person
     */
    public function addIllustrator($illustrator)
    {
        $this->illustrator []= $illustrator;
        return $this;
    }

    /**
     * @param $isbn String
     */
    public function addIsbn($isbn)
    {
        $this->isbn []= $isbn;
        return $this;
    }

    /**
     * @param $numberOfPages Integer
     */
    public function addNumberOfPages($numberOfPages)
    {
        $this->numberOfPages []= $numberOfPages;
        return $this;
    }


}