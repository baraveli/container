<?php

namespace Baraveli\Container;

require_once '../vendor/autoload.php';

use Baraveli\Container\Sample\SampleClass;


$container = new Container();

$container->bind(SampleClass::class, function (Container $c) {
    return new SampleClass();
});


$sampleclass = $container->get(SampleClass::class);

$sampleclass->printHello();