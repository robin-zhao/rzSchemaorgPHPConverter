<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork;

use Robinzhao\SchemaOrg\Thing\CreativeWork;

/**
 * Blog
 * http://schema.org/Blog
 */
class Blog extends CreativeWork
{

    /**
     * A posting that is part of this blog.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    protected $blogPost;

    /**
     * The postings that are part of this blog (legacy spelling; see singular form, blogPost).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    protected $blogPosts;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/Blog";

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }

    /**
     * @param $blogPost Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public function setBlogPost($blogPost)
    {
        $this->blogPost = $blogPost;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

    /**
     * @param $blogPosts Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public function setBlogPosts($blogPosts)
    {
        $this->blogPosts = $blogPosts;
        return $this;
    }

}
