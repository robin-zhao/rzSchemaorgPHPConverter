<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\TransferAction;

use Example\Thing\Action\TransferAction;

/**
 * Lend Action
 * http://schema.org/LendAction
 */
class LendAction extends TransferAction
{

    /**
     * A sub property of participant. The person that borrows the object being lent.
     *
     * @var Example\Thing\Person
     */
    protected $borrower;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/LendAction";

    /**
     * @return Example\Thing\Person
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * @param $borrower Example\Thing\Person
     */
    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;
        return $this;
    }

}
