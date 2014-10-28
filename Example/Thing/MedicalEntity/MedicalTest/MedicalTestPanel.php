<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

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
     * @var Example\Thing\MedicalEntity\MedicalTest
     */
    private $subTest;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalTestPanel";

    /**
     * @return Example\Thing\MedicalEntity\MedicalTest
     */
    public function getSubTest()
    {
        return $this->subTest;
    }

    /**
     * @param $subTest Example\Thing\MedicalEntity\MedicalTest
     */
    public function setSubTest($subTest)
    {
        $this->subTest = $subTest;
        return $this;
    }

}
