<?php

/*
|--------------------------------------------------------------------------
| Baraveli Container
|--------------------------------------------------------------------------
|
| Baraveli Container is a Container class that bind services,config,classes into a registry array
| and returns the service,config or classes through out the app. Intially created to be
| used in baraveli packages.
|
|Maintained by Mohamed Jinas(@jinas123)
|
|
*/
namespace Baraveli\Container;

use Baraveli\Container\Interfaces\IContainer;
use Exception;


class Container implements IContainer
{

    protected static $registry = [];


    /**
     * bind
     *
     * @param  mixed $key
     * @param  mixed $value
     *
     * @return void
     */
    public static function bind($key, $value): void
    {

        static::$registry[$key] = $value;
    }


    /**
     * get
     *
     * @param mixed $key
     *
     * @return object
     * @throws Exception
     */
    public static function get($key)
    {

        if (!array_key_exists($key, static::$registry)) {

            throw new \Exception("No {$key} is bound into the container.");
        }


        return static::$registry[$key];
    }
}
