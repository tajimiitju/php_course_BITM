<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59466ef8675abcb3b8f855cce1d9a281
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59466ef8675abcb3b8f855cce1d9a281::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59466ef8675abcb3b8f855cce1d9a281::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
