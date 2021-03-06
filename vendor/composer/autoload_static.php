<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46d954d3cee1110eb807bacb44b7f034
{
    public static $files = array (
        '9b27a8995bb6a23428b34a97ae91d986' => __DIR__ . '/../..' . '/config/config.php',
        'fc52faac46123804c62632e1f1d41324' => __DIR__ . '/../..' . '/config/route.php',
        '1bd5b9048cae49b5882630345f05cc5e' => __DIR__ . '/../..' . '/includes/loader.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Server\\Classes\\' => 15,
        ),
        'I' => 
        array (
            'Includes\\Classes\\' => 17,
        ),
        'C' => 
        array (
            'Client\\Classes\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Server\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/server/classes',
        ),
        'Includes\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
        'Client\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/client/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46d954d3cee1110eb807bacb44b7f034::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46d954d3cee1110eb807bacb44b7f034::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46d954d3cee1110eb807bacb44b7f034::$classMap;

        }, null, ClassLoader::class);
    }
}
