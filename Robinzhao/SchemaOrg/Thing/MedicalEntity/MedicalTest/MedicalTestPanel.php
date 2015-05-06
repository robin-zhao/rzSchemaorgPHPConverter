<?php
/**
 * This is an auto generated file.
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
    public $subTest;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalTestPanel";

    /**
     * @param $subTest Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest
     */
    public function addSubTest($subTest)
    {
        $this->subTest []= $subTest;
        return $this;
    }


}