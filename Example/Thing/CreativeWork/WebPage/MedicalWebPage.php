<?php

namespace Example\Thing\CreativeWork\WebPage;

use Example\Thing\CreativeWork\WebPage;

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
    private $aspect;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalWebPage";

    public function getaspect()
    {
        return $this->aspect;
    }

    public function setaspect($aspect)
    {
        $this->aspect = $aspect;
        return $this;
    }

}