<?php

namespace Robinzhao;

use Robinzhao\SchemaOrg\Thing;

/**
 * Description of JsonLDFormatter
 *
 * @author Jian Zhao
 * @email boborabit@gmail.com
 */
class JsonLDFormatter
{

    private $thing;
    private $json;

    public function __construct(Thing $thing)
    {
        $this->thing = $thing;
        $this->json = new \stdClass();
    }

    public function format($topLevel = true)
    {
        $reflectionClass = new \ReflectionClass($this->thing);
        $properties = $reflectionClass->getProperties();
        foreach ($properties as $property) {

            $propertyValue = $this->thing->{$property->name};
            if (!is_null($propertyValue)) {

                if ($property->name == 'context') {

                    $parts = explode('/', $propertyValue);
                    $type = array_pop($parts);

                    if ($topLevel) {
                        $context = implode('/', $parts);
                        $label = '@context';
                        $this->json->{$label} = $context;
                    }

                    $label = '@type';
                    $this->json->{$label} = $type;
                } else {
                    // Text based property.
                    $doc = $property->getDocComment();
                    $match = array();
                    preg_match('/@var ([a-zA-Z\\\\]+)/', $doc, $match);

                    switch ($match[1])
                    {
                        case 'String':
                            if (count($propertyValue) > 1) {
                                $this->json->{$property->name} = $propertyValue;
                            } else {
                                $this->json->{$property->name} = current($propertyValue);
                            }
                            break;
                        case 'Integer':
                        case 'float':
                            throw new Exception('no implemented');
                        default:
                            if (count($propertyValue) > 1) {
                                foreach ($propertyValue as $each) {
                                    $newJsonLDFormatter = new self($each);
                                    $this->json->{$property->name} []= $newJsonLDFormatter->format(false);
                                }
                            } else {
                                $newJsonLDFormatter = new self(current($propertyValue));
                                $this->json->{$property->name} = $newJsonLDFormatter->format(false);
                            }
                            break;
                    }
                }
            }
        }

        return $this->json;
    }

    public function toJson()
    {
        $this->format();
        return json_encode($this->json);
    }
}