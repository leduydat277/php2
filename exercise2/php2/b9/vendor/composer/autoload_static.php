<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ae82bf43a20b24b35e186776eaaa67f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ae82bf43a20b24b35e186776eaaa67f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ae82bf43a20b24b35e186776eaaa67f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ae82bf43a20b24b35e186776eaaa67f::$classMap;

        }, null, ClassLoader::class);
    }
}
