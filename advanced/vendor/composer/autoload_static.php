<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita636a9919b0366af04cbf4f1c0ff5ce1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Source',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita636a9919b0366af04cbf4f1c0ff5ce1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita636a9919b0366af04cbf4f1c0ff5ce1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita636a9919b0366af04cbf4f1c0ff5ce1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
