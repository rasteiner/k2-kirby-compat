<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8
{
    public static $files = array (
        'f485627b283286104bbc2461f512799f' => __DIR__ . '/..' . '/getkirby/toolkit/bootstrap.php',
        '4d43cb4a92fc9083dc76dd8887c0a0ef' => __DIR__ . '/../..' . '/composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'M' => 
        array (
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-smartypants',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8::$classMap;

        }, null, ClassLoader::class);
    }
}
