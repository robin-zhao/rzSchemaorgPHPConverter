<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\TransferAction;

use Robinzhao\SchemaOrg\Thing\Action\TransferAction;

/**
 * Borrow Action
 * http://schema.org/BorrowAction
 */
class BorrowAction extends TransferAction
{

    /**
     * A sub property of participant. The person that lends the object being borrowed.
     *
     * @var Robinzhao\SchemaOrg\Thing\Person
     */
    protected $lender;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/BorrowAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\Person
     */
    public function getLender()
    {
        return $this->lender;
    }

    /**
     * @param $lender Robinzhao\SchemaOrg\Thing\Person
     */
    public function setLender($lender)
    {
        $this->lender = $lender;
        return $this;
    }

}
