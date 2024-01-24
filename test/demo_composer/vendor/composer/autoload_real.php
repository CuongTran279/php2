<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit63e11a642c98c076ba2bc86c4fd04708
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

        spl_autoload_register(array('ComposerAutoloaderInit63e11a642c98c076ba2bc86c4fd04708', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit63e11a642c98c076ba2bc86c4fd04708', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit63e11a642c98c076ba2bc86c4fd04708::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
