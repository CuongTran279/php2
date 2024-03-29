<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit23b9e0ae0c9f38d92d131616942f27eb
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

        spl_autoload_register(array('ComposerAutoloaderInit23b9e0ae0c9f38d92d131616942f27eb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit23b9e0ae0c9f38d92d131616942f27eb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit23b9e0ae0c9f38d92d131616942f27eb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
