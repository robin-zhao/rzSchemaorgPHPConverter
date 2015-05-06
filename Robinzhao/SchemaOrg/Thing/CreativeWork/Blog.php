<?php
/**
 * This is an auto generated file.
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
    public $blogPost;

    /**
     * The postings that are part of this blog (legacy spelling; see singular form, blogPost).
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public $blogPosts;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/Blog";

    /**
     * @param $blogPost Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public function addBlogPost($blogPost)
    {
        $this->blogPost []= $blogPost;
        return $this;
    }

    /**
     * @param $blogPosts Robinzhao\SchemaOrg\Thing\CreativeWork\Article\BlogPosting
     */
    public function addBlogPosts($blogPosts)
    {
        $this->blogPosts []= $blogPosts;
        return $this;
    }


}