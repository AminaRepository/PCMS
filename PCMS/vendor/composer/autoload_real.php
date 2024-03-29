<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4d9435c1caefbea67e9f1b9a6d4d7d5c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit4d9435c1caefbea67e9f1b9a6d4d7d5c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4d9435c1caefbea67e9f1b9a6d4d7d5c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4d9435c1caefbea67e9f1b9a6d4d7d5c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
