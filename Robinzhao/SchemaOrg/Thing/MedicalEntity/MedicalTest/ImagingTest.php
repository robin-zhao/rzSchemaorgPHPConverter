<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
 * Imaging Test
 * http://schema.org/ImagingTest
 */
class ImagingTest extends MedicalTest
{

    /**
     * Imaging technique used.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalImagingTechnique
     */
    public $imagingTechnique;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ImagingTest";

    /**
     * @param $imagingTechnique Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalImagingTechnique
     */
    public function addImagingTechnique($imagingTechnique)
    {
        $this->imagingTechnique []= $imagingTechnique;
        return $this;
    }

}
