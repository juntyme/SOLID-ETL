<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit812559ca15c1dcd18ad26d566e200191
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\AppEtl\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\AppEtl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit812559ca15c1dcd18ad26d566e200191::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit812559ca15c1dcd18ad26d566e200191::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit812559ca15c1dcd18ad26d566e200191::$classMap;

        }, null, ClassLoader::class);
    }
}
