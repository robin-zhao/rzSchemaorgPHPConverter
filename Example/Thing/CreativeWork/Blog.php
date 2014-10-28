<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork;

use Example\Thing\CreativeWork;

/**
 * Blog
 * http://schema.org/Blog
 */
class Blog extends CreativeWork
{

    /**
     * A posting that is part of this blog.
     *
     * @var Example\Thing\CreativeWork\Article\BlogPosting
     */
    private $blogPost;

    /**
     * The postings that are part of this blog (legacy spelling; see singular form, blogPost).
     *
     * @var Example\Thing\CreativeWork\Article\BlogPosting
     */
    private $blogPosts;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/Blog";

    public function getblogPost()
    {
        return $this->blogPost;
    }

    public function setblogPost($blogPost)
    {
        $this->blogPost = $blogPost;
        return $this;
    }

    public function getblogPosts()
    {
        return $this->blogPosts;
    }

    public function setblogPosts($blogPosts)
    {
        $this->blogPosts = $blogPosts;
        return $this;
    }

}
