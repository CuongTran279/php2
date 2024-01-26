<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2720fb424072f53b5c3192b41e65d4c6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2720fb424072f53b5c3192b41e65d4c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2720fb424072f53b5c3192b41e65d4c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2720fb424072f53b5c3192b41e65d4c6::$classMap;

        }, null, ClassLoader::class);
    }
}
