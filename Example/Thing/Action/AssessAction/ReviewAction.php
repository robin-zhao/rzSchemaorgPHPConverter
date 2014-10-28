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
    private $resultReview;

    /**
     * schema.org url
     */
    private $url = "http://schema.org/ReviewAction";

    public function getResultReview()
    {
        return $this->resultReview;
    }

    public function setResultReview($resultReview)
    {
        $this->resultReview = $resultReview;
        return $this;
    }

}
