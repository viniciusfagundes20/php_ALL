<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd85e4f2cf9fbb466246cb812dd10f8aa
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd85e4f2cf9fbb466246cb812dd10f8aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd85e4f2cf9fbb466246cb812dd10f8aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}