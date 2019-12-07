<?php

namespace Baraveli\Container\Interfaces;

interface IContainer
{

    /**
     * bind
     *
     * @param  mixed $key
     * @param  mixed $value
     *
     * @return void
     */
    public static function bind($key, $value): void;


    /**
     * get
     *
     * @param  mixed $key
     *
     * @return object
     */
    public static function get($key);
}
