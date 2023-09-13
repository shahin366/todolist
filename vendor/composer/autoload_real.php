<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit58904c5cb2fdd6353a3836a46ea667ba
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

        spl_autoload_register(array('ComposerAutoloaderInit58904c5cb2fdd6353a3836a46ea667ba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit58904c5cb2fdd6353a3836a46ea667ba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit58904c5cb2fdd6353a3836a46ea667ba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}