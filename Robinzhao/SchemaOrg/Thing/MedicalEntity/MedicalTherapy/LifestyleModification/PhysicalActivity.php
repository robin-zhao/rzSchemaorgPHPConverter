<?php
/**
 * This is an auto generated file.
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
    public $associatedAnatomy;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    public $category;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @var String
     */
    public $epidemiology;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @var String
     */
    public $pathophysiology;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/PhysicalActivity";

    /**
     * @param $associatedAnatomy Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|Robinzhao\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|Robinzhao\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
     */
    public function addAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy []= $associatedAnatomy;
        return $this;
    }

    /**
     * @param $category String|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Robinzhao\SchemaOrg\Thing
     */
    public function addCategory($category)
    {
        $this->category []= $category;
        return $this;
    }

    /**
     * @param $epidemiology String
     */
    public function addEpidemiology($epidemiology)
    {
        $this->epidemiology []= $epidemiology;
        return $this;
    }

    /**
     * @param $pathophysiology String
     */
    public function addPathophysiology($pathophysiology)
    {
        $this->pathophysiology []= $pathophysiology;
        return $this;
    }


}