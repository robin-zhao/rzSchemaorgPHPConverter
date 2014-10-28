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

    /**
     * @return String
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * @param $dependencies String
     */
    public function setDependencies($dependencies)
    {
        $this->dependencies = $dependencies;
        return $this;
    }

    /**
     * @return String
     */
    public function getProficiencyLevel()
    {
        return $this->proficiencyLevel;
    }

    /**
     * @param $proficiencyLevel String
     */
    public function setProficiencyLevel($proficiencyLevel)
    {
        $this->proficiencyLevel = $proficiencyLevel;
        return $this;
    }

}
