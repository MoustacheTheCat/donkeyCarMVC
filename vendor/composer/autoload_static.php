<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73e0dee3da0bf5b51c9f5c08267632a2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moustache\\NewDonkeyCar\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moustache\\NewDonkeyCar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73e0dee3da0bf5b51c9f5c08267632a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73e0dee3da0bf5b51c9f5c08267632a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73e0dee3da0bf5b51c9f5c08267632a2::$classMap;

        }, null, ClassLoader::class);
    }
}
