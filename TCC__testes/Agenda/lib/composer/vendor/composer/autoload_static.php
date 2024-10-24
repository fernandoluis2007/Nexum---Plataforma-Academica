<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1fe24e30895c1db32e555f5016efd66
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1fe24e30895c1db32e555f5016efd66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1fe24e30895c1db32e555f5016efd66::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1fe24e30895c1db32e555f5016efd66::$classMap;

        }, null, ClassLoader::class);
    }
}
