<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10ea0ab3d5b20494c644bf43ecfa58e0
{
    public static $files = array (
        'cfb7c780793bfa1138356bbe97dc66da' => __DIR__ . '/..' . '/leafs/http/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'L' => 
        array (
            'Leaf\\Http\\' => 10,
            'Leaf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Leaf\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafs/http/src',
        ),
        'Leaf\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafs/anchor/src',
            1 => __DIR__ . '/..' . '/leafs/ui/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10ea0ab3d5b20494c644bf43ecfa58e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10ea0ab3d5b20494c644bf43ecfa58e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10ea0ab3d5b20494c644bf43ecfa58e0::$classMap;

        }, null, ClassLoader::class);
    }
}
