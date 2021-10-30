<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43a9335424abd04dcf3689476f4562e7
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Pelago\\Emogrifier\\' => 18,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'D' => 
        array (
            'DeviceDetector\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Pelago\\Emogrifier\\' => 
        array (
            0 => __DIR__ . '/..' . '/pelago/emogrifier/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'DeviceDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/matomo/device-detector',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sabberworm\\CSS' => 
            array (
                0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43a9335424abd04dcf3689476f4562e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43a9335424abd04dcf3689476f4562e7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit43a9335424abd04dcf3689476f4562e7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit43a9335424abd04dcf3689476f4562e7::$classMap;

        }, null, ClassLoader::class);
    }
}
