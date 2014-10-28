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

    public function getarticleBody()
    {
        return $this->articleBody;
    }

    public function setarticleBody($articleBody)
    {
        $this->articleBody = $articleBody;
        return $this;
    }

    public function getarticleSection()
    {
        return $this->articleSection;
    }

    public function setarticleSection($articleSection)
    {
        $this->articleSection = $articleSection;
        return $this;
    }

    public function getwordCount()
    {
        return $this->wordCount;
    }

    public function setwordCount($wordCount)
    {
        $this->wordCount = $wordCount;
        return $this;
    }

}
