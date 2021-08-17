<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2de3fd82dae226d543dcc3df1a7a7a5e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2de3fd82dae226d543dcc3df1a7a7a5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2de3fd82dae226d543dcc3df1a7a7a5e::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit2de3fd82dae226d543dcc3df1a7a7a5e::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2de3fd82dae226d543dcc3df1a7a7a5e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2de3fd82dae226d543dcc3df1a7a7a5e::$classMap;

        }, null, ClassLoader::class);
    }
}
