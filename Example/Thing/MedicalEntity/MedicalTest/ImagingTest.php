<?php

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
     * @var MedicalImagingTechnique
     */
    private $imagingTechnique;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ImagingTest";

    public function getimagingTechnique()
    {
        return $this->imagingTechnique;
    }

    public function setimagingTechnique($imagingTechnique)
    {
        $this->imagingTechnique = $imagingTechnique;
        return $this;
    }

}
