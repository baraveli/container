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
    private $registry = [];


   
    /**
     * bind
     *
     * @param  mixed $key
     * @param  mixed $factory
     * 
     * Binding the factory to the registry array given a key.
     *
     * @return void
     */
    public function bind($key, callable $factory)
    {
        $this->registry[$key] = $factory;
    }


   
    /**
     * get
     *
     * @param  mixed $key
     * 
     * Getting the instance when given a key of the registered factory.
     *
     * @return void
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->registry)) 
        {
            throw new \Exception("No {$key} is bound into the container.");
        }


        return $this->registry[$key]($this);
    }
}
