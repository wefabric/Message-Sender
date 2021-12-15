<?php

use Wefabric\MessageSender\MessageSender;

require __DIR__.'/../vendor/autoload.php';

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance();
$options
    ->setOrigin('https://test.messageservice.rexel.nl/MessageService31/MessageService.svc?wsdl')
    ->setDestination('../MessageService31')
    ->setComposerName('Wefabric\MessageSender\MessageService31');
// Generator instantiation
$generator = new Generator($options);
// Package generation
$generator->generatePackage();
