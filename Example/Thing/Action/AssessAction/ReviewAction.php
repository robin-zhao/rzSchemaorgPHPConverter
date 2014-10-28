<?php

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

    public function getresultReview()
    {
        return $this->resultReview;
    }

    public function setresultReview($resultReview)
    {
        $this->resultReview = $resultReview;
        return $this;
    }

}
