<?php

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
     * @var Thing|MedicalDevicePurpose
     */
    private $purpose;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/AllocateAction";

    public function getpurpose()
    {
        return $this->purpose;
    }

    public function setpurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

}