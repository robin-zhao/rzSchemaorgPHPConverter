rzSchemaOrgPHPConverter
==============================

Generate php classes from http://schema.rdfs.org/all.json
Similar purpose like https://github.com/snider/schema.org-php-classes-compiler
Just don't like underscore seperated class names.

### Requirement

    PHP5.3+, Composer

### Installation

  - git clone https://github.com/robin-zhao/rzSchemaorgPHPConverter.git 
  - composer install

### How to use

  - /usr/bin/php console convert

### Known Issue

  - Example\Thing\Class   Class is a reserved keyword... 