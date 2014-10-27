<?php

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
     * @var BookFormatType
     */
    private $bookFormat;

    /**
     * The illustrator of the book.
     *
     * @var Person
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

    public function getbookEdition()
    {
        return $this->bookEdition;
    }

    public function setbookEdition($bookEdition)
    {
        $this->bookEdition = $bookEdition;
        return $this;
    }

    public function getbookFormat()
    {
        return $this->bookFormat;
    }

    public function setbookFormat($bookFormat)
    {
        $this->bookFormat = $bookFormat;
        return $this;
    }

    public function getillustrator()
    {
        return $this->illustrator;
    }

    public function setillustrator($illustrator)
    {
        $this->illustrator = $illustrator;
        return $this;
    }

    public function getisbn()
    {
        return $this->isbn;
    }

    public function setisbn($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getnumberOfPages()
    {
        return $this->numberOfPages;
    }

    public function setnumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
        return $this;
    }

}
