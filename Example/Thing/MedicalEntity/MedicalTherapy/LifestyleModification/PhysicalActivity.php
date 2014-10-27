<?php

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
     * @var AnatomicalSystem|SuperficialAnatomy|AnatomicalStructure
     */
    private $associatedAnatomy;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     * @var String|PhysicalActivityCategory|Thing
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

    public function getassociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    public function setassociatedAnatomy($associatedAnatomy)
    {
        $this->associatedAnatomy = $associatedAnatomy;
        return $this;
    }

    public function getcategory()
    {
        return $this->category;
    }

    public function setcategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function getepidemiology()
    {
        return $this->epidemiology;
    }

    public function setepidemiology($epidemiology)
    {
        $this->epidemiology = $epidemiology;
        return $this;
    }

    public function getpathophysiology()
    {
        return $this->pathophysiology;
    }

    public function setpathophysiology($pathophysiology)
    {
        $this->pathophysiology = $pathophysiology;
        return $this;
    }

}
