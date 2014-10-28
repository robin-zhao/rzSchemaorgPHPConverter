<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalStudy;

use Example\Thing\MedicalEntity\MedicalStudy;

/**
 * Medical Observational Study
 * http://schema.org/MedicalObservationalStudy
 */
class MedicalObservationalStudy extends MedicalStudy
{

    /**
     * Specifics about the observational study design (enumerated).
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalObservationalStudyDesign
     */
    private $studyDesign;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalObservationalStudy";

    public function getStudyDesign()
    {
        return $this->studyDesign;
    }

    public function setStudyDesign($studyDesign)
    {
        $this->studyDesign = $studyDesign;
        return $this;
    }

}
