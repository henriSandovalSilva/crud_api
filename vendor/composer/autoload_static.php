<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc506bed6824d8329348f2acd3404b26c
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Henri\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Henri\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc506bed6824d8329348f2acd3404b26c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc506bed6824d8329348f2acd3404b26c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
