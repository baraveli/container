<?php

namespace Baraveli\Container\Interfaces;

interface IContainer
{
    /**
     * bind.
     *
     * @param mixed $key
     * @param mixed $factory
     *
     * @return void
     */
    public function bind($key, callable $factory);

    /**
     * get.
     *
     * @param mixed $key
     *
     * @return void
     */
    public function get($key);
}
