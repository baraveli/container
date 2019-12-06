<?php

use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{

    public function testBindingAndGettingClassFromTheContainer()
    {

        \Baraveli\Container\Container::bind('hello', new \Baraveli\Container\Sample\SampleClass);

        $this->assertEquals(\Baraveli\Container\Container::get('hello'), new \Baraveli\Container\Sample\SampleClass);
    }

    public function testGettingSampleValueFromTheSampleClassUsingTheContainer()
    {

        \Baraveli\Container\Container::bind('hello', new \Baraveli\Container\Sample\SampleClass);

        $sampleClass = \Baraveli\Container\Container::get('hello');

        $this->assertEquals($sampleClass->getString(), 'Hello World');
    }
}
