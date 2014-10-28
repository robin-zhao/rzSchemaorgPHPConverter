<?php

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

    public function getcode()
    {
        return $this->code;
    }

    public function setcode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function getguideline()
    {
        return $this->guideline;
    }

    public function setguideline($guideline)
    {
        $this->guideline = $guideline;
        return $this;
    }

    public function getmedicineSystem()
    {
        return $this->medicineSystem;
    }

    public function setmedicineSystem($medicineSystem)
    {
        $this->medicineSystem = $medicineSystem;
        return $this;
    }

    public function getrecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    public function setrecognizingAuthority($recognizingAuthority)
    {
        $this->recognizingAuthority = $recognizingAuthority;
        return $this;
    }

    public function getrelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    public function setrelevantSpecialty($relevantSpecialty)
    {
        $this->relevantSpecialty = $relevantSpecialty;
        return $this;
    }

    public function getstudy()
    {
        return $this->study;
    }

    public function setstudy($study)
    {
        $this->study = $study;
        return $this;
    }

}
