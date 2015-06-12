<?php
namespace FormManager;

/**
 * Factory class to create all elements.
 */
class Builder
{
    protected static $factories = [];

    /**
     * Add a factory class to the builder.
     *
     * @param FactoryInterface $factory
     */
    public static function addFactory(FactoryInterface $factory)
    {
        array_unshift(static::$factories, $factory);
    }

    /**
     * Magic method to create instances using the API Builder::whatever().
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return null|DataElementInterface
     */
    public static function __callStatic($name, $arguments)
    {
        foreach (self::$factories as $factory) {
            if (($item = $factory->get($name, $arguments)) !== null) {
                return $item;
            }
        }
    }
}

//Add the form-manager factory by default
Builder::addFactory(new Factory());
