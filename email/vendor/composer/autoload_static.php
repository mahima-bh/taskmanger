<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfaf799f8d8a7c19543d55179d486f346
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfaf799f8d8a7c19543d55179d486f346::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfaf799f8d8a7c19543d55179d486f346::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfaf799f8d8a7c19543d55179d486f346::$classMap;

        }, null, ClassLoader::class);
    }
}
