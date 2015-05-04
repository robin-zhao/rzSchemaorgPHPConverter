<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\LifestyleModification;

use Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalTherapy\LifestyleModification;

/**
 * Physical Activity
 * http://schema.org/PhysicalActivity
 */
class PhysicalActivity extends LifestyleModification
{

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     * @var Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    protected $associatedAnatomy;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    protected $category;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @var String
     */
    protected $epidemiology;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @var String
     */
    protected $pathophysiology;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PhysicalActivity";

    /**
     * @return Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * @param $associatedAnatomy Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
        return $this;
    }

    /**
     * @return String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $category String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return String
     */
    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    /**
     * @param $epidemiology String
     */
    public function setEpidemiology($epidemiology)
    {
        $this->epidemiology = $epidemiology;
        return $this;
    }

    /**
     * @return String
     */
    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    /**
     * @param $pathophysiology String
     */
    public function setPathophysiology($pathophysiology)
    {
        $this->pathophysiology = $pathophysiology;
        return $this;
    }

}
