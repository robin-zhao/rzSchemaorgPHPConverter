<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalTherapy\LifestyleModification;

use Example\Thing\MedicalEntity\MedicalTherapy\LifestyleModification;

/**
 * Physical Activity
 * http://schema.org/PhysicalActivity
 */
class PhysicalActivity extends LifestyleModification
{

    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     *
     * @var Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\SuperficialAnatomy|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    private $associatedAnatomy;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var String|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Example\Thing
     */
    private $category;

    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     *
     * @var String
     */
    private $epidemiology;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     *
     * @var String
     */
    private $pathophysiology;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/PhysicalActivity";

    /**
     * @return Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\SuperficialAnatomy|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * @param $associatedAnatomy Example\Thing\MedicalEntity\AnatomicalSystem|Example\Thing\MedicalEntity\SuperficialAnatomy|Example\Thing\MedicalEntity\AnatomicalStructure
     */
    public function setAssociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
        return $this;
    }

    /**
     * @return String|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Example\Thing
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $category String|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|Example\Thing
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
