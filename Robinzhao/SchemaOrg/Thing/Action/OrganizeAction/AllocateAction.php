<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\OrganizeAction;

use Robinzhao\SchemaOrg\Thing\Action\OrganizeAction;

/**
 * Allocate Action
 * http://schema.org/AllocateAction
 */
class AllocateAction extends OrganizeAction
{

    /**
     * A goal towards an action is taken. Can be concrete or abstract.
     *
     * @var Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public $purpose;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/AllocateAction";

    /**
     * @param $purpose Robinzhao\SchemaOrg\Thing|Robinzhao\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalDevicePurpose
     */
    public function addPurpose($purpose)
    {
        $this->purpose []= $purpose;
        return $this;
    }

}
