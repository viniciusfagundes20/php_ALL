<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e866caee9f5998d7778e532a33fe4c6
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sts\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e866caee9f5998d7778e532a33fe4c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e866caee9f5998d7778e532a33fe4c6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}