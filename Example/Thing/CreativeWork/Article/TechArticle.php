<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\CreativeWork\Article;

use Example\Thing\CreativeWork\Article;

/**
 * Tech Article
 * http://schema.org/TechArticle
 */
class TechArticle extends Article
{

    /**
     * Prerequisites needed to fulfill steps in article.
     *
     * @var String
     */
    private $dependencies;

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     * @var String
     */
    private $proficiencyLevel;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/TechArticle";

    public function getdependencies()
    {
        return $this->dependencies;
    }

    public function setdependencies($dependencies)
    {
        $this->dependencies = $dependencies;
        return $this;
    }

    public function getproficiencyLevel()
    {
        return $this->proficiencyLevel;
    }

    public function setproficiencyLevel($proficiencyLevel)
    {
        $this->proficiencyLevel = $proficiencyLevel;
        return $this;
    }

}
