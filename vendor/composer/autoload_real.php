<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit23740a5a93edd06ae2f3df81c7ecded5
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

        spl_autoload_register(array('ComposerAutoloaderInit23740a5a93edd06ae2f3df81c7ecded5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit23740a5a93edd06ae2f3df81c7ecded5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit23740a5a93edd06ae2f3df81c7ecded5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
