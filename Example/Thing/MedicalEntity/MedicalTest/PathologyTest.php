<?php
/**
 * This is an auto generated file.
 * You are encouraged to edit the script below:
 * https://github.com/robin-zhao/rzSchemaorgPHPConverter/
 */

namespace Example\Thing\MedicalEntity\MedicalTest;

use Example\Thing\MedicalEntity\MedicalTest;

/**
 * Pathology Test
 * http://schema.org/PathologyTest
 */
class PathologyTest extends MedicalTest
{

    /**
     * The type of tissue sample required for the test.
     *
     * @var String
     */
    protected $tissueSample;

    /**
     * schema.org context url
     * @var String
     */
    protected $context = "http://schema.org/PathologyTest";

    /**
     * @return String
     */
    public function getTissueSample()
    {
        return $this->tissueSample;
    }

    /**
     * @param $tissueSample String
     */
    public function setTissueSample($tissueSample)
    {
        $this->tissueSample = $tissueSample;
        return $this;
    }

}
