<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8b2ce3e98114bd796893b32cae6fe5f
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8b2ce3e98114bd796893b32cae6fe5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8b2ce3e98114bd796893b32cae6fe5f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
