<?php

use Composer\Autoload\ClassLoader;
use Robinzhao\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Robinzhao\SchemaOrg\Thing\Person;
use Robinzhao\JsonLDFormatter;

require 'vendor/autoload.php';

$loader = new ClassLoader();
$loader->add('Robinzhao', '.');
$loader->register();

$videoObject = new VideoObject();

$person = new Person();
$person->addTelephone('123456789');
$person->addName('Robin');
$videoObject->addAuthor($person);

$person = new Person();
$person->addTelephone('987654321');
$person->addName('Tom');
$videoObject->addAuthor($person);

$videoObject->addAward("This is a award.");
$videoObject->addAward("This is another award.");

$formatter = new JsonLDFormatter($videoObject);

echo $formatter->toJson();
