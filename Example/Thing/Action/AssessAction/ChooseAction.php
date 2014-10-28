<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\AssessAction;

use Example\Thing\Action\AssessAction;

/**
 * Choose Action
 * http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction
{

    /**
     * A sub property of object. The options subject to this action.
     *
     * @var String|Example\Thing
     */
    private $option;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ChooseAction";

    public function getoption()
    {
        return $this->option;
    }

    public function setoption($option)
    {
        $this->option = $option;
        return $this;
    }

}
