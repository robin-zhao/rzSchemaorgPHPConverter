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
    public $code;

    /**
     * A medical guideline related to this entity.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
     */
    public $guideline;

    /**
     * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    public $medicineSystem;

    /**
     * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
     *
     * @var Robinzhao\SchemaOrg\Thing\Organization
     */
    public $recognizingAuthority;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public $relevantSpecialty;

    /**
     * A medical study or trial related to this entity.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy
     */
    public $study;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/MedicalEntity";

    /**
     * @param $code Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode
     */
    public function addCode($code)
    {
        $this->code []= $code;
        return $this;
    }

    /**
     * @param $guideline Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
     */
    public function addGuideline($guideline)
    {
        $this->guideline []= $guideline;
        return $this;
    }

    /**
     * @param $medicineSystem Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem
     */
    public function addMedicineSystem($medicineSystem)
    {
        $this->medicineSystem []= $medicineSystem;
        return $this;
    }

    /**
     * @param $recognizingAuthority Robinzhao\SchemaOrg\Thing\Organization
     */
    public function addRecognizingAuthority($recognizingAuthority)
    {
        $this->recognizingAuthority []= $recognizingAuthority;
        return $this;
    }

    /**
     * @param $relevantSpecialty Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty
     */
    public function addRelevantSpecialty($relevantSpecialty)
    {
        $this->relevantSpecialty []= $relevantSpecialty;
        return $this;
    }

    /**
     * @param $study Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalStudy
     */
    public function addStudy($study)
    {
        $this->study []= $study;
        return $this;
    }

}
