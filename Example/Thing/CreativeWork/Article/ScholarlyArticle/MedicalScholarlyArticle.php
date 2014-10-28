<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\Article\ScholarlyArticle;

use Example\Thing\CreativeWork\Article\ScholarlyArticle;

/**
 * Medical Scholarly Article
 * http://schema.org/MedicalScholarlyArticle
 */
class MedicalScholarlyArticle extends ScholarlyArticle
{

    /**
     * The type of the medical article, taken from the US NLM MeSH publication type catalog.
     *
     * @var String
     */
    private $publicationType;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalScholarlyArticle";

    public function getPublicationType()
    {
        return $this->publicationType;
    }

    public function setPublicationType($publicationType)
    {
        $this->publicationType = $publicationType;
        return $this;
    }

}
