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
    protected $imagingTechnique;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ImagingTest";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalImagingTechnique
     */
    public function getImagingTechnique()
    {
        return $this->imagingTechnique;
    }

    /**
     * @param $imagingTechnique Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalImagingTechnique
     */
    public function setImagingTechnique($imagingTechnique)
    {
        $this->imagingTechnique = $imagingTechnique;
        return $this;
    }

}
