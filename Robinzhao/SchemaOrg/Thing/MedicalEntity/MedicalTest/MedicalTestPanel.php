<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
 * Medical Test Panel
 * http://schema.org/MedicalTestPanel
 */
class MedicalTestPanel extends MedicalTest
{

    /**
     * A component test of the panel.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    protected $subTest;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalTestPanel";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function getSubTest()
    {
        return $this->subTest;
    }

    /**
     * @param $subTest Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function setSubTest($subTest)
    {
        $this->subTest = $subTest;
        return $this;
    }

}
