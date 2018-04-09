<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bb97b52e734eadc8d626025f2234e98
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bb97b52e734eadc8d626025f2234e98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bb97b52e734eadc8d626025f2234e98::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7bb97b52e734eadc8d626025f2234e98::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
