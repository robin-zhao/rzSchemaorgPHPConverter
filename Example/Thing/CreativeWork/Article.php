<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

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
    private $articleBody;

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
     *
     * @var String
     */
    private $articleSection;

    /**
     * The number of words in the text of the Article.
     *
     * @var Integer
     */
    private $wordCount;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Article";

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
