<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\Action\AssessAction;

use Example\Thing\Action\AssessAction;

/**
 * Review Action
 * http://schema.org/ReviewAction
 */
class ReviewAction extends AssessAction
{

    /**
     * A sub property of result. The review that resulted in the performing of the action.
     *
     * @var Example\Thing\CreativeWork\Review
     */
    protected $resultReview;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/ReviewAction";

    /**
     * @return Example\Thing\CreativeWork\Review
     */
    public function getResultReview()
    {
        return $this->resultReview;
    }

    /**
     * @param $resultReview Example\Thing\CreativeWork\Review
     */
    public function setResultReview($resultReview)
    {
        $this->resultReview = $resultReview;
        return $this;
    }

}
