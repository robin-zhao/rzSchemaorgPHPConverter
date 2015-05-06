<?php
/**
 * This is an auto generated file.
 */

namespace Robinzhao\SchemaOrg\Thing\CreativeWork\WebPage;

use Robinzhao\SchemaOrg\Thing\CreativeWork\WebPage;

/**
 * Medical Web Page
 * http://schema.org/MedicalWebPage
 */
class MedicalWebPage extends WebPage
{

    /**
     * An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
     *
     * @var String
     */
    public $aspect;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalWebPage";

    /**
     * @param $aspect String
     */
    public function addAspect($aspect)
    {
        $this->aspect []= $aspect;
        return $this;
    }


}