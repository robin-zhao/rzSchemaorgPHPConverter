<?php

namespace Example;

/**
 * Thing
 * http://schema.org/Thing
 */
class Thing
{

    /**
     * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
     *
     * @var String
     */
    private $additionalType;

    /**
     * An alias for the item.
     *
     * @var String
     */
    private $alternateName;

    /**
     * A short description of the item.
     *
     * @var String
     */
    private $description;

    /**
     * URL of an image of the item.
     *
     * @var String
     */
    private $image;

    /**
     * The name of the item.
     *
     * @var String
     */
    private $name;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
     *
     * @var String
     */
    private $sameAs;

    /**
     * URL of the item.
     *
     * @var String
     */
    private $url;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Thing";

    public function getadditionalType()
    {
        return $this->additionalType;
    }

    public function setadditionalType($additionalType)
    {
        $this->additionalType = $additionalType;
        return $this;
    }

    public function getalternateName()
    {
        return $this->alternateName;
    }

    public function setalternateName($alternateName)
    {
        $this->alternateName = $alternateName;
        return $this;
    }

    public function getdescription()
    {
        return $this->description;
    }

    public function setdescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getimage()
    {
        return $this->image;
    }

    public function setimage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getname()
    {
        return $this->name;
    }

    public function setname($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getsameAs()
    {
        return $this->sameAs;
    }

    public function setsameAs($sameAs)
    {
        $this->sameAs = $sameAs;
        return $this;
    }

    public function geturl()
    {
        return $this->url;
    }

    public function seturl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

}
