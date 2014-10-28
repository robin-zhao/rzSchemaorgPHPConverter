<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\TransferAction;

use Example\Thing\Action\TransferAction;

/**
 * Borrow Action
 * http://schema.org/BorrowAction
 */
class BorrowAction extends TransferAction
{

    /**
     * A sub property of participant. The person that lends the object being borrowed.
     *
     * @var Example\Thing\Person
     */
    private $lender;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/BorrowAction";

    public function getlender()
    {
        return $this->lender;
    }

    public function setlender($lender)
    {
        $this->lender = $lender;
        return $this;
    }

}
