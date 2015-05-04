<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Robinzhao\SchemaOrg\Thing\Action\AssessAction;

use Robinzhao\SchemaOrg\Thing\Action\AssessAction;

/**
 * Review Action
 * http://schema.org/ReviewAction
 */
class ReviewAction extends AssessAction
{

    /**
     * A sub property of result. The review that resulted in the performing of the action.
     *
     * @var Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    protected $resultReview;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ReviewAction";

    /**
     * @return Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function getResultReview()
    {
        return $this->resultReview;
    }

    /**
     * @param $resultReview Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function setResultReview($resultReview)
    {
        $this->resultReview = $resultReview;
        return $this;
    }

}
