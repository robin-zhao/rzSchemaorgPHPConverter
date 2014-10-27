<?php

namespace Example\Thing\MedicalEntity\MedicalTest;

use Example\Thing\MedicalEntity\MedicalTest;

/**
 * Medical Test Panel
 * http://schema.org/MedicalTestPanel
 */
class MedicalTestPanel extends MedicalTest
{

    /**
     * A component test of the panel.
     *
     * @var MedicalTest
     */
    private $subTest;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalTestPanel";

    public function getsubTest()
    {
        return $this->subTest;
    }

    public function setsubTest($subTest)
    {
        $this->subTest = $subTest;
        return $this;
    }

}
