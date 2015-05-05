<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy;

/**
 * Medical Observational Study
 * http://schema.org/MedicalObservationalStudy
 */
class MedicalObservationalStudy extends MedicalStudy
{

    /**
     * Specifics about the observational study design (enumerated).
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalObservationalStudyDesign
     */
    public $studyDesign;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalObservationalStudy";

    /**
     * @param $studyDesign Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalObservationalStudyDesign
     */
    public function addStudyDesign($studyDesign)
    {
        $this->studyDesign []= $studyDesign;
        return $this;
    }

}
