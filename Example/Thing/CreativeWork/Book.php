<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

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
    private $bookEdition;

    /**
     * The format of the book.
     *
     * @var Example\Thing\Intangible\Enumeration\BookFormatType
     */
    private $bookFormat;

    /**
     * The illustrator of the book.
     *
     * @var Example\Thing\Person
     */
    private $illustrator;

    /**
     * The ISBN of the book.
     *
     * @var String
     */
    private $isbn;

    /**
     * The number of pages in the book.
     *
     * @var Integer
     */
    private $numberOfPages;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Book";

    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    public function setBookEdition($bookEdition)
    {
        $this->bookEdition = $bookEdition;
        return $this;
    }

    public function getBookFormat()
    {
        return $this->bookFormat;
    }

    public function setBookFormat($bookFormat)
    {
        $this->bookFormat = $bookFormat;
        return $this;
    }

    public function getIllustrator()
    {
        return $this->illustrator;
    }

    public function setIllustrator($illustrator)
    {
        $this->illustrator = $illustrator;
        return $this;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
        return $this;
    }

}
