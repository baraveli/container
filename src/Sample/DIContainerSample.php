<?php

namespace Baraveli\Container\Sample;

use Baraveli\Container\Container;

class DIContainerSample
{
    private $sampleClass;

    public function __construct()
    {
        Container::bind('sampleclass', new \Baraveli\Container\Sample\SampleClass);

        $this->sampleClass = Container::get('sampleclass');
    }

    public function echoSampleClassString()
    {
        echo $this->sampleClass->getString();
    }
}