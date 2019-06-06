<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfea32c7026dd2a3ba2d034b3866f040
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VIISON\\AddressSplitter\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VIISON\\AddressSplitter\\' => 
        array (
            0 => __DIR__ . '/..' . '/viison/address-splitter/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfea32c7026dd2a3ba2d034b3866f040::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfea32c7026dd2a3ba2d034b3866f040::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
