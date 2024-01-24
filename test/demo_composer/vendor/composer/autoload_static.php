<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63e11a642c98c076ba2bc86c4fd04708
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cuong\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cuong\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63e11a642c98c076ba2bc86c4fd04708::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63e11a642c98c076ba2bc86c4fd04708::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63e11a642c98c076ba2bc86c4fd04708::$classMap;

        }, null, ClassLoader::class);
    }
}