<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Article
 * http://schema.org/Article
 */
class Article extends CreativeWork
{

    /**
     * The actual body of the article.
     *
     * @var String
     */
    public $articleBody;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     *
     * @var String
     */
    public $articleSection;

    /**
     * The number of words in the text of the Article.
     *
     * @var Integer
     */
    public $wordCount;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Article";

    /**
     * @param $articleBody String
     */
    public function addArticleBody($articleBody)
    {
        $this->articleBody []= $articleBody;
        return $this;
    }

    /**
     * @param $articleSection String
     */
    public function addArticleSection($articleSection)
    {
        $this->articleSection []= $articleSection;
        return $this;
    }

    /**
     * @param $wordCount Integer
     */
    public function addWordCount($wordCount)
    {
        $this->wordCount []= $wordCount;
        return $this;
    }


}