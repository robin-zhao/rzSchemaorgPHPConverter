<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\OrganizeAction;

use Example\Thing\Action\OrganizeAction;

/**
 * Allocate Action
 * http://schema.org/AllocateAction
 */
class AllocateAction extends OrganizeAction
{

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    private $purpose;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AllocateAction";

    /**
     * @return Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param $purpose Example\Thing|Example\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

}
