<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing;

use Example\Thing;

/**
 * Medical Entity
 * http://schema.org/MedicalEntity
 */
class MedicalEntity extends Thing
{

    /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    private $code;

    /**
     * A medical guideline related to this entity.
     *
     * @var Example\Thing\MedicalEntity\MedicalGuideline
     */
    private $guideline;

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    private $medicineSystem;

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     *
     * @var Example\Thing\Organization
     */
    private $recognizingAuthority;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @var Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    private $relevantSpecialty;

    /**
     * A medical study or trial related to this entity.
     *
     * @var Example\Thing\MedicalEntity\MedicalStudy
     */
    private $study;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/MedicalEntity";

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code Example\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalGuideline
     */
    public function getGuideline()
    {
        return $this->guideline;
    }

    /**
     * @param $guideline Example\Thing\MedicalEntity\MedicalGuideline
     */
    public function setGuideline($guideline)
    {
        $this->guideline = $guideline;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    public function getMedicineSystem()
    {
        return $this->medicineSystem;
    }

    /**
     * @param $medicineSystem Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    public function setMedicineSystem($medicineSystem)
    {
        $this->medicineSystem = $medicineSystem;
        return $this;
    }

    /**
     * @return Example\Thing\Organization
     */
    public function getRecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    /**
     * @param $recognizingAuthority Example\Thing\Organization
     */
    public function setRecognizingAuthority($recognizingAuthority)
    {
        $this->recognizingAuthority = $recognizingAuthority;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function getRelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    /**
     * @param $relevantSpecialty Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function setRelevantSpecialty($relevantSpecialty)
    {
        $this->relevantSpecialty = $relevantSpecialty;
        return $this;
    }

    /**
     * @return Example\Thing\MedicalEntity\MedicalStudy
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * @param $study Example\Thing\MedicalEntity\MedicalStudy
     */
    public function setStudy($study)
    {
        $this->study = $study;
        return $this;
    }

}
