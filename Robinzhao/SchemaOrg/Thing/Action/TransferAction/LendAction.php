<?php
/**
 * This is an auto generated file.
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
    public $borrower;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/LendAction";

    /**
     * @param $borrower Robinzhao\SchemaOrg\Thing\Person
     */
    public function addBorrower($borrower)
    {
        $this->borrower []= $borrower;
        return $this;
    }


}