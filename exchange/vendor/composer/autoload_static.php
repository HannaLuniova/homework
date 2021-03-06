<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1772fbafa07f3182107c881224af7b34
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luniova\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luniova\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1772fbafa07f3182107c881224af7b34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1772fbafa07f3182107c881224af7b34::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1772fbafa07f3182107c881224af7b34::$classMap;

        }, null, ClassLoader::class);
    }
}
