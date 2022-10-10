<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14b9c0e4a1f2ea62efa01779498c62b9
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kanebane\\Trello\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kanebane\\Trello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit14b9c0e4a1f2ea62efa01779498c62b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14b9c0e4a1f2ea62efa01779498c62b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14b9c0e4a1f2ea62efa01779498c62b9::$classMap;

        }, null, ClassLoader::class);
    }
}
