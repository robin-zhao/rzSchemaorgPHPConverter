<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing;

use Robinzhao\SchemaOrg\Thing;

/**
 * Medical Entity
 * http://schema.org/MedicalEntity
 */
class MedicalEntity extends Thing
{

    /**
     * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    protected $code;

    /**
     * A medical guideline related to this entity.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
     */
    protected $guideline;

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    protected $medicineSystem;

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    protected $recognizingAuthority;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    protected $relevantSpecialty;

    /**
     * A medical study or trial related to this entity.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy
     */
    protected $study;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/MedicalEntity";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
     */
    public function getGuideline()
    {
        return $this->guideline;
    }

    /**
     * @param $guideline Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
     */
    public function setGuideline($guideline)
    {
        $this->guideline = $guideline;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    public function getMedicineSystem()
    {
        return $this->medicineSystem;
    }

    /**
     * @param $medicineSystem Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    public function setMedicineSystem($medicineSystem)
    {
        $this->medicineSystem = $medicineSystem;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\Organization
     */
    public function getRecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    /**
     * @param $recognizingAuthority Robinzhao\SchemaOrg\Thing\Organization
     */
    public function setRecognizingAuthority($recognizingAuthority)
    {
        $this->recognizingAuthority = $recognizingAuthority;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function getRelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    /**
     * @param $relevantSpecialty Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function setRelevantSpecialty($relevantSpecialty)
    {
        $this->relevantSpecialty = $relevantSpecialty;
        return $this;
    }

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * @param $study Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy
     */
    public function setStudy($study)
    {
        $this->study = $study;
        return $this;
    }

}
