<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita068700d65f1a6b8e35a4668153f1743
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
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
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita068700d65f1a6b8e35a4668153f1743::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita068700d65f1a6b8e35a4668153f1743::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita068700d65f1a6b8e35a4668153f1743::$classMap;

        }, null, ClassLoader::class);
    }
}
