<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

use Robinzhao\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

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
    public $publicationType;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalScholarlyArticle";

    /**
     * @param $publicationType String
     */
    public function addPublicationType($publicationType)
    {
        $this->publicationType []= $publicationType;
        return $this;
    }

}
