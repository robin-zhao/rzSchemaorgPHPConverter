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
    public $additionalType;

    /**
     * An alias for the item.
     *
     * @var String
     */
    public $alternateName;

    /**
     * A short description of the item.
     *
     * @var String
     */
    public $description;

    /**
     * URL of an image of the item.
     *
     * @var String
     */
    public $image;

    /**
     * The name of the item.
     *
     * @var String
     */
    public $name;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
     *
     * @var String
     */
    public $sameAs;

    /**
     * URL of the item.
     *
     * @var String
     */
    public $url;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Thing";

    /**
     * @param $additionalType String
     */
    public function addAdditionalType($additionalType)
    {
        $this->additionalType []= $additionalType;
        return $this;
    }

    /**
     * @param $alternateName String
     */
    public function addAlternateName($alternateName)
    {
        $this->alternateName []= $alternateName;
        return $this;
    }

    /**
     * @param $description String
     */
    public function addDescription($description)
    {
        $this->description []= $description;
        return $this;
    }

    /**
     * @param $image String
     */
    public function addImage($image)
    {
        $this->image []= $image;
        return $this;
    }

    /**
     * @param $name String
     */
    public function addName($name)
    {
        $this->name []= $name;
        return $this;
    }

    /**
     * @param $sameAs String
     */
    public function addSameAs($sameAs)
    {
        $this->sameAs []= $sameAs;
        return $this;
    }

    /**
     * @param $url String
     */
    public function addUrl($url)
    {
        $this->url []= $url;
        return $this;
    }

}
