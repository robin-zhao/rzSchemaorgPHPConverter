<?php
/**
 * This is an auto generated file.
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
    public $resultReview;

    /**
     * schema.org context url
     * @var String
     */
    public $context = "http://schema.org/ReviewAction";

    /**
     * @param $resultReview Robinzhao\SchemaOrg\Thing\CreativeWork\Review
     */
    public function addResultReview($resultReview)
    {
        $this->resultReview []= $resultReview;
        return $this;
    }


}