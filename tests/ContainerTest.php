<?php

use Baraveli\Container\Container;
use Baraveli\Container\Sample\SampleClass;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testBindingAndGettingClassFromTheContainer()
    {
        $container = new Container();

        $container->bind(SampleClass::class, function (Container $c) {
            return new SampleClass();
        });

        $this->assertEquals($container->get(SampleClass::class), new \Baraveli\Container\Sample\SampleClass());
    }
}
