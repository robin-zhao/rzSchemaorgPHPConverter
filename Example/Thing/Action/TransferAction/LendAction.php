<?php

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
     * @var Person
     */
    private $borrower;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/LendAction";

    public function getborrower()
    {
        return $this->borrower;
    }

    public function setborrower($borrower)
    {
        $this->borrower = $borrower;
        return $this;
    }

}
