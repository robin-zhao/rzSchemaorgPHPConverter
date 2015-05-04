<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg;

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
    protected $additionalType;

    /**
     * An alias for the item.
     *
     * @var String
     */
    protected $alternateName;

    /**
     * A short description of the item.
     *
     * @var String
     */
    protected $description;

    /**
     * URL of an image of the item.
     *
     * @var String
     */
    protected $image;

    /**
     * The name of the item.
     *
     * @var String
     */
    protected $name;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
     *
     * @var String
     */
    protected $sameAs;

    /**
     * URL of the item.
     *
     * @var String
     */
    protected $url;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Thing";

    /**
     * @return String
     */
    public function getAdditionalType()
    {
        return $this->additionalType;
    }

    /**
     * @param $additionalType String
     */
    public function setAdditionalType($additionalType)
    {
        $this->additionalType = $additionalType;
        return $this;
    }

    /**
     * @return String
     */
    public function getAlternateName()
    {
        return $this->alternateName;
    }

    /**
     * @param $alternateName String
     */
    public function setAlternateName($alternateName)
    {
        $this->alternateName = $alternateName;
        return $this;
    }

    /**
     * @return String
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description String
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return String
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $image String
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name String
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return String
     */
    public function getSameAs()
    {
        return $this->sameAs;
    }

    /**
     * @param $sameAs String
     */
    public function setSameAs($sameAs)
    {
        $this->sameAs = $sameAs;
        return $this;
    }

    /**
     * @return String
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $url String
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return String
     */
    public function getContext()
    {
        return $this->context;
    }

}
