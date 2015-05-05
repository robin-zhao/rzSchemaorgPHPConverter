<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\Article;

use Robinzhao\SchemaOrg\Thing\CreativeWork\Article;

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
    public $dependencies;

    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     * @var String
     */
    public $proficiencyLevel;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/TechArticle";

    /**
     * @param $dependencies String
     */
    public function addDependencies($dependencies)
    {
        $this->dependencies []= $dependencies;
        return $this;
    }

    /**
     * @param $proficiencyLevel String
     */
    public function addProficiencyLevel($proficiencyLevel)
    {
        $this->proficiencyLevel []= $proficiencyLevel;
        return $this;
    }

}
