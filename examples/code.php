<?php

namespace Baraveli\Container;

require_once '../vendor/autoload.php';


use Baraveli\Container\Sample\DIContainerSample;

$hello = new DIContainerSample();

$hello->echoSampleClassString();
