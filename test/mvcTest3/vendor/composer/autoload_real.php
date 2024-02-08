<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit41e4efd50d50b891ac63eebe81b7a67c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit41e4efd50d50b891ac63eebe81b7a67c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit41e4efd50d50b891ac63eebe81b7a67c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit41e4efd50d50b891ac63eebe81b7a67c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}