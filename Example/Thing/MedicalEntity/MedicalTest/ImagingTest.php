<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalTest;

use Example\Thing\MedicalEntity\MedicalTest;

/**
 * Imaging Test
 * http://schema.org/ImagingTest
 */
class ImagingTest extends MedicalTest
{

    /**
     * Imaging technique used.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalImagingTechnique
     */
    private $imagingTechnique;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ImagingTest";

    public function getImagingTechnique()
    {
        return $this->imagingTechnique;
    }

    public function setImagingTechnique($imagingTechnique)
    {
        $this->imagingTechnique = $imagingTechnique;
        return $this;
    }

}
