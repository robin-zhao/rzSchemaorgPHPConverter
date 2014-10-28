<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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

    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    public function setAdditionalType($additionalType)
    {
        $this->additionalType = $additionalType;
        return $this;
    }

    public function getAlternateName()
    {
        return $this->alternateName;
    }

    public function setAlternateName($alternateName)
    {
        $this->alternateName = $alternateName;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSameAs()
    {
        return $this->sameAs;
    }

    public function setSameAs($sameAs)
    {
        $this->sameAs = $sameAs;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

}
