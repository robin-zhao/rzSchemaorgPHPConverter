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
    protected $bookEdition;

    /**
     * The format of the book.
     *
     * @var Example\Thing\Intangible\Enumeration\BookFormatType
     */
    protected $bookFormat;

    /**
     * The illustrator of the book.
     *
     * @var Example\Thing\Person
     */
    protected $illustrator;

    /**
     * The ISBN of the book.
     *
     * @var String
     */
    protected $isbn;

    /**
     * The number of pages in the book.
     *
     * @var Integer
     */
    protected $numberOfPages;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Book";

    /**
     * @return String
     */
    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    /**
     * @param $bookEdition String
     */
    public function setBookEdition($bookEdition)
    {
        $this->bookEdition = $bookEdition;
        return $this;
    }

    /**
     * @return Example\Thing\Intangible\Enumeration\BookFormatType
     */
    public function getBookFormat()
    {
        return $this->bookFormat;
    }

    /**
     * @param $bookFormat Example\Thing\Intangible\Enumeration\BookFormatType
     */
    public function setBookFormat($bookFormat)
    {
        $this->bookFormat = $bookFormat;
        return $this;
    }

    /**
     * @return Example\Thing\Person
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * @param $illustrator Example\Thing\Person
     */
    public function setIllustrator($illustrator)
    {
        $this->illustrator = $illustrator;
        return $this;
    }

    /**
     * @return String
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param $isbn String
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * @param $numberOfPages Integer
     */
    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
        return $this;
    }

}
