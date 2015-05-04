<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
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
    protected $articleBody;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     *
     * @var String
     */
    protected $articleSection;

    /**
     * The number of words in the text of the Article.
     *
     * @var Integer
     */
    protected $wordCount;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Article";

    /**
     * @return String
     */
    public function getArticleBody()
    {
        return $this->articleBody;
    }

    /**
     * @param $articleBody String
     */
    public function setArticleBody($articleBody)
    {
        $this->articleBody = $articleBody;
        return $this;
    }

    /**
     * @return String
     */
    public function getArticleSection()
    {
        return $this->articleSection;
    }

    /**
     * @param $articleSection String
     */
    public function setArticleSection($articleSection)
    {
        $this->articleSection = $articleSection;
        return $this;
    }

    /**
     * @return Integer
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * @param $wordCount Integer
     */
    public function setWordCount($wordCount)
    {
        $this->wordCount = $wordCount;
        return $this;
    }

}
