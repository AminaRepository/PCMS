<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d9435c1caefbea67e9f1b9a6d4d7d5c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4d9435c1caefbea67e9f1b9a6d4d7d5c::$classMap;

        }, null, ClassLoader::class);
    }
}
