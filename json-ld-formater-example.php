<?php

use Composer\Autoload\ClassLoader;
use Example\Thing\CreativeWork\MediaObject\VideoObject;
use Example\Thing\Person;
use Robinzhao\JsonLDFormatter;

require 'vendor/autoload.php';

$loader = new ClassLoader();
$loader->add('Example', '.');
$loader->add('Robinzhao', '.');
$loader->register();

$videoObject = new VideoObject();

$person = new Person();
$person->setTelephone('123456789');
$person->setName('Robin');
$videoObject->setAuthor($person);

$videoObject->setAward("This is a award.");

$formatter = new JsonLDFormatter($videoObject);

echo $formatter->toJson();
