<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TransferAction;

use Robinzhao\SchemaOrg\Thing\Action\TransferAction;

/**
 * Lend Action
 * http://schema.org/LendAction
 */
class LendAction extends TransferAction
{

    /**
     * A sub property of participant. The person that borrows the object being lent.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $borrower;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/LendAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * @param $borrower Robinzhao\SchemaOrg\Thing\Person
     */
    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;
        return $this;
    }

}
