<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d70f9331cefcf8362042936d523b76c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moment\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moment\\' => 
        array (
            0 => __DIR__ . '/..' . '/fightbulc/moment/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d70f9331cefcf8362042936d523b76c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d70f9331cefcf8362042936d523b76c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
