<?php

use PHPUnit\Framework\TestCase;

use Baraveli\Container\Sample\SampleClass;
use Baraveli\Container\Container;

class ContainerTest extends TestCase
{

    public function testBindingAndGettingClassFromTheContainer()
    {

        $container = new Container();

        $container->bind(SampleClass::class, function(Container $c){
            return new SampleClass();
        });

        $this->assertEquals($container->get(SampleClass::class), new \Baraveli\Container\Sample\SampleClass);
    }
}
