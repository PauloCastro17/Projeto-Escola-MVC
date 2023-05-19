<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6c7326759ba3ed4be137e74a293ee79
{
    public static $files = array (
        '57d13b9c0cadeb7d4aff4316e7bab6e3' => __DIR__ . '/../..' . '/Source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Uploader\\' => 20,
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Uploader\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/uploader/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6c7326759ba3ed4be137e74a293ee79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6c7326759ba3ed4be137e74a293ee79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6c7326759ba3ed4be137e74a293ee79::$classMap;

        }, null, ClassLoader::class);
    }
}
